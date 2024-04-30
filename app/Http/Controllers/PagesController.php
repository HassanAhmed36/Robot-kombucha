<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;


class PagesController extends Controller
{
    public function getProducts()
    {
        return view('product', [
            'products' => Product::with('images')->get()
        ]);
    }

    public function getOneProduct($id)
    {
        return view('product-detail', [
            'product' => Product::with('images')->find($id),
            'setting' => SiteSetting::find(1)
        ]);
    }

    public function checkout($id)
    {
        return view('checkout', [
            'product' => Product::with('images')->find($id)
        ]);
    }

    public function postOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'card_number' => 'required|regex:/^\d{4} \d{4} \d{4} \d{4}$/',
            'cvs' => 'required|regex:/^\d{3}$/',
            'expiry_date' => 'required|regex:/^\d{2}\/\d{4}$/',
            'price' => 'required'
        ]);
        try {
            Stripe::setApiKey('sk_test_51NYRGYGcmMBjdwMryh3L0cyk3Z3a6qbpIrDme39i9crBTgc0jK9zsg2C9e8aSFqGIec5HDnTBjODqC5O0AXYQZzV00VxmqcA18');
            $paymentIntent = App\Http\Controllers\PaymentIntent::create([
                'amount' => $request->price * 100,
                'currency' => 'usd',
                'description' => 'Order Payment',
                'payment_method' => $request->payment_method,
                'confirmation_method' => 'manual',
            ]);
            Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'payment_id' => $paymentIntent->id,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'card_number' => $request->card_number,
                'cvs' => $request->cvs,
                'expiry_date' => $request->expiry_date,
                'price' => $request->price
            ]);
            return redirect()->route('home')->with('success', 'Order Successfully Submitted');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Failed to submit order. Please try again.');
        }
    }
    
    public function order()
    {
        return view('admin.order.index', [
            'orders' => Order::all()
        ]);
    }

 
}

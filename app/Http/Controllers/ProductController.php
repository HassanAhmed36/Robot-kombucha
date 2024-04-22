<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::with('images')->get()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'product_image' => 'required'
        ]);

        try {
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description
            ]);

            if ($request->hasFile('product_image')) {
                foreach ($request->product_image as $image) {
                    $name = uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('product-image/'), $name);
                    $path = 'product-image/' . $name;
                    Image::create([
                        'image_path' => $path,
                        'product_id' => $product->id
                    ]);
                }
            }

            return back()->with('success', 'Product added Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Product added Failed!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        try {
            return view('admin.partials.modal.edit-product', [
                'product' => Product::find($request->id)
            ]);
        } catch (\Exception $e) {
            return response("error : {$e->getMessage()}" , 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        try {
            $product = Product::find($id);
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description
            ]);

            if ($request->hasFile('product_image')) {
                foreach ($request->product_image as $image) {
                    $name = uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('product-image/'), $name);
                    $path = 'product-image/' . $name;
                    Image::create([
                        'image_path' => $path,
                        'product_id' => $product->id
                    ]);
                }
            }

            return back()->with('success', 'Product Updated Successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Product Updated Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Product::find($id)->delete();
            return back()->with('success', 'Product Delete Successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Product Delete Failed!');
        }
    }

    public function deleteImage($id)
    {
        try {
            Image::find($id)->delete();
            return back()->with('success', 'image Delete successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', 'image Delete Failed!');
        }
    }
}

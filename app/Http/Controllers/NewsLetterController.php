<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index(){
        
        return view('admin.newsletter.index' , [
            'subscription' => NewsLetter::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:news_letters,email'
        ]);

        try {
            NewsLetter::create([
                'email' => $request->email
            ]);

            return back()->with('success', 'Newsletter subscription successful');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->with('error', 'Failed to subscribe to newsletter');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
{
    public function update(Request $request)
    {
    User::select('payment_confirmation')->update(['payment_confirmation'=>$request->payment_confirmation])
    ;
    return redirect('/');
    }
}
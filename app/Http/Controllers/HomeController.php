<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Counting number of used and valid promotion codes
        $codesUsed = Auth::user()
                        ->promotionCodes()
                        ->where('is_used',true)
                        ->get();
        $codesValid = Auth::user()
                        ->promotionCodes()
                        ->where('is_used',false)
                        ->get();

        $nCodesValid = count($codesValid);
        $nCodesUsed = count($codesUsed);
        
        return view('home', compact('nCodesValid','nCodesUsed'));
    }
}

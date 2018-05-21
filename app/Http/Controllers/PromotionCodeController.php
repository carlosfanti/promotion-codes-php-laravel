<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PromotionCode;

class PromotionCodeController extends Controller
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
     * Get a listing of the valid promotion codes.
     *
     * @return \Illuminate\Http\Response
     */
    public function listNewPromotionCodes()
    {
        $listCodes = Auth::user()
                        ->promotionCodes()
                        ->where('is_used',false)
                        ->orderBy('created_at', 'DEC')
                        ->paginate(5);        
        return view('promotionCode.index',compact('listCodes'));
    }

    /**
     * Get a listing of the used promotion codes.
     *
     * @return \Illuminate\Http\Response
     */
    public function listUsedPromotionCodes()
    {
        $listCodes = Auth::user()
                        ->promotionCodes()
                        ->where('is_used',true)
                        ->orderBy('updated_at', 'DEC')
                        ->paginate(5);
        return view('promotionCode.index',compact('listCodes'));
    }

    /**
     * Generate a new promotion code.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newPromotionCode(Request $request)
    {
        //Generate new promotional code
        $lastCode = PromotionCode::orderBy('created_at','DESC')->first();
        if($lastCode){
            $newCode = $lastCode->id++;
        }else{
            $newCode = 0;
        }

        //save in database
        PromotionCode::create([
            'user_id' => Auth::user()->id,
            'code' => 'PROMO-'.$newCode,
        ]);

        //Message to the frontend
        $message = 'new promotion code: PROMO-'.$newCode;
        
        return redirect()->back()->with(['message'=>$message, 'alert-class'=>'alert-success']);        
    }

    /**
     * Use a promotion code.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usePromotionCode($id)
    {
        //Update the used status
        $promotionCode = PromotionCode::find($id);
        $promotionCode->is_used = true;
        $promotionCode->save();

        //Message to the frontend
        $message = 'Promotion code used: '.$promotionCode->code;
        
        return redirect()->back()->with(['message'=>$message, 'alert-class'=>'alert-warning']);       
    }
}

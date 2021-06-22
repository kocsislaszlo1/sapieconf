<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
     public function store(Request $request)
    {
        $msg=$request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message'=>'required',
        ]);
         $receiver = "kocsislaszlo@uni.sapientia.ro";
         Mail::to($receiver)->send(new contact($msg));
            return response()->json(['code' => 200, 'msg' => 'Thanks for contacting us, we will get back to you soon.']);
 
    }
}

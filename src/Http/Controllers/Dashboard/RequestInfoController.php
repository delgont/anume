<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\RequestInfo;
use Illuminate\Support\Facades\Mail;




class RequestInfoController extends Controller {

    public function index()
    {

        return view('pages.admissions.requestInfo');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|max:500',
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required'
        ]);

        Mail::to(config('aamsnm.mail_to'))->send(new RequestInfo([
            'message' => $request->message,
            'names' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone
        ]));

        return back();
    }

    public function view()
    {
        return new RequestInfo([
            'message' => 'hello',
            'names' => 'Okello Stephen Omoding',
            'email' => 'jj@gmail.com',
            'phone' => '+256774285504',
            'address' => 'Pallisa, Uganda',
        ]);

    }


}
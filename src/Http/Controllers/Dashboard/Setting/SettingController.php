<?php
namespace Delgont\Anume\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;

use Delgont\Cms\Models\Page\Page;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;





class SettingController extends Controller
{

    public function index()
    {
        return view('anume::dashboard.settings.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|max:500',
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required'
        ]);

        Mail::to(config('aamsnm.mail_to'))->send(new ContactUs([
            'message' => $request->message,
            'names' => $request->name,
            'email' => $request->email,
            'subject' => 'subject'

        ]));

        return ($request->expectsJson()) ? response()->json([
            'success' => true, 'message' => 'Your message has been delivered successfully'
        ]) : back()->with('message', 'Your message has been delivered successfully');
    }

    public function markdown()
    {
        return new ContactUs([
            'message' => 'hello',
            'names' => 'Okello Stephen Omoding',
            'email' => 'jj@gmail.com',
            'subject' => 'subject'
        ]);
    }

    
}
<?php

namespace App\Http\Controllers\Vinass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\Contact;

class IndexController extends Controller
{
    public function index(){
    	return view('vinass.index.index');
    }
    public function aboutus(){
    	return view('vinass.index.aboutus');
    }
    public function design(){
        $feedbacks = Feedback::where('active',1)->get();
    	return view('vinass.index.design', compact('feedbacks'));
    }
    public function application(){
        $feedbacks = Feedback::where('active',1)->get();
    	return view('vinass.index.application', compact('feedbacks'));
    }
    public function getContact(){
    	return view('vinass.index.contact');
    }
    public function postContact(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $contact->save();
        return redirect(route('vinass.index.contact'))->with('msg', 'Gửi liên hệ thành công!');

    }
    public function templates(){
    	return view('vinass.index.templates');
    }
}

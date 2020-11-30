<?php

namespace App\Http\Controllers\Frontend\ScientificDiamondCompany;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Session;
use App\JobRequest;

class UserController extends Controller
{
    //
    public function contact(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'username.required' => trans('sdc.username required'),
            'username.string' => trans('sdc.username string'),
            'email.required' => trans('sdc.email required'),
            'email.email' => trans('sdc.email email'),
            'phone.required' => trans('sdc.phone required'),
            'subject.required' => trans('sdc.subject required'),
            'message.required' => trans('sdc.message required'),
            'phone.numeric' => trans('sdc.phone numeric'),
        ]);

        Contact::create($request->all());
        if (App::isLocale('en')) {
            Session::flash('Sent', 'Thanks , Your Message Sent Successfully');
            return redirect('sdc/contact');
        } else {
            Session::flash('تم', 'شكرا , تم استلام رسالتك');
            return redirect('sdc/contact');

        }


    }

    public function ApplyJob(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
         //   'phone' => 'numeric',
            'cv' => 'required|mimes:pdf,doc,docx,pptx,ppt,txt',

        ], [
            'username.required' => trans('sdc.username required'),
            'username.string' => trans('sdc.username string'),
            'email.required' => trans('sdc.email required'),
            'email.email' => trans('sdc.email email'),
         //   'phone.required' => trans('sdc.phone required'),
            'cv.required' => trans('sdc.cv required'),
            'cv.file' => trans('sdc.cv file'),
            'cv.mimes' => trans('sdc.cv mimes'),
         //   'message.required' => trans('sdc.message required'),
        //    'phone.numeric' => trans('sdc.phone numeric'),
        ]);

        $input = $request->all();

        if ($file = $request->file('cv')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/cvs/', $name);
            $input['cv'] = $name;
        }
        JobRequest::create($input);
        if (App::isLocale('en')) {
            Session::flash('Applied', 'Thanks , Your Application Sent Successfully');
            return redirect()->back();
        } else {
            Session::flash('تم التقدم', 'شكرا , تم لقد تم تقدمك للوظيفة بنجاح');
            return redirect()->back();

        }
    }
}

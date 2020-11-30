<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'Settings';
        $settings = Setting::all();
        return view('backend/settings.index', compact('settings', 'table'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments = Department::all();
        return view('backend/settings.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
               'facebook' => 'required|url',
               'twitter' => 'required|url',
               'youtube' => 'required|url',
               'googleplus' => 'required|url',
               'linkedin' => 'required|url',
               'address_eg_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'address_uae_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'address_ksa_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'address_eg_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'address_uae_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'address_ksa_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'intro_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'vision_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'vision_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'mission_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'mission_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'message_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'message_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'goal_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'goal_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'values_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'values_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'whyus_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
               'whyus_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
               'phone_eg' => 'required|numeric',
               'phone_uae' => 'required|numeric',
               'phone_ksa' => 'required|numeric',
               'email_egy' => 'required|email',
               'email_ksa' => 'required|email',
               'email_uae' => 'required|email',
           ], [], [
               'address_ar' => 'Arabic Address',
               'address_en' => 'English Address',
               'intro_ar' => 'Arabic Intro',
               'intro_en' => 'English Intro',
               'vision_ar' => 'Arabic Vision',
               'vision_en' => 'English Vision',
               'mission_ar' => 'Arabic Mission',
               'mission_en' => 'English Mission',
               'message_ar' => 'Arabic Message',
               'message_en' => 'English Message',
               'values_ar' => 'Arabic Values',
               'values_en' => 'English Values',
               'goal_ar' => 'Arabic Goal',
               'goal_en' => 'English Goal',
               'whyus_ar' => 'Arabic Why us',
               'whyus_en' => 'English Why us',
               'email_uae' => 'Emirates Email',
               'email_egy' => 'Egyptian Email',
               'email_ksa' => 'Saudi Email',
               'phone_eg' => 'Egyptian Phone',
               'phone_ksa' => 'Saudi Phone',
               'phone_uae' => 'Emirates Phone',
               'address_eg_ar' => 'Arabic Egyptian Address',
               'address_uae_ar' => 'Arabic Emirates Address',
               'address_ksa_ar' => 'Arabic Saudi Address',
               'address_eg_en' => 'English Egyptian Address',
               'address_uae_en' => 'English Emirates Address',
               'address_ksa_en' => 'English Saudi Address',

           ]);
        Setting::create($request->all());
        Session::flash('Added', 'Settings Added Successfully');
        return redirect('admin/settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $setting = Setting::find($id);
        return view('backend/settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $setting = Setting::find($id);
        return view('backend/settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $setting = Setting::find($id);
        $request->validate([
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'youtube' => 'required|url',
            'googleplus' => 'required|url',
            'linkedin' => 'required|url',
            'address_eg_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'address_uae_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'address_ksa_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'address_eg_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'address_uae_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'address_ksa_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'vision_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'vision_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'mission_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'mission_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'message_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'message_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'goal_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'goal_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'values_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'values_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'whyus_ar' => 'required|regex: /^[\p{Arabic}\s\p{N} \.\,\-]+$/u',
            'whyus_en' => 'required|regex: /^[\s\p{N} a-zA-Z \.\,\-]+/',
            'phone_eg' => 'required|numeric',
            'phone_uae' => 'required|numeric',
            'phone_ksa' => 'required|numeric',
            'email_egy' => 'required|email',
            'email_ksa' => 'required|email',
            'email_uae' => 'required|email',
        ], [], [
            'intro_ar' => 'Arabic Intro',
            'intro_en' => 'English Intro',
            'vision_ar' => 'Arabic Vision',
            'vision_en' => 'English Vision',
            'mission_ar' => 'Arabic Mission',
            'mission_en' => 'English Mission',
            'message_ar' => 'Arabic Message',
            'message_en' => 'English Message',
            'values_ar' => 'Arabic Values',
            'values_en' => 'English Values',
            'goal_ar' => 'Arabic Goal',
            'goal_en' => 'English Goal',
            'whyus_ar' => 'Arabic Why us',
            'whyus_en' => 'English Why us',
            'email_uae' => 'Emirates Email',
            'email_egy' => 'Egyptian Email',
            'email_ksa' => 'Saudi Email',
            'phone_eg' => 'Egyptian Phone',
            'phone_ksa' => 'Saudi Phone',
            'phone_uae' => 'Emirates Phone',
            'address_eg_ar' => 'Arabic Egyptian Address',
            'address_uae_ar' => 'Arabic Emirates Address',
            'address_ksa_ar' => 'Arabic Saudi Address',
            'address_eg_en' => 'English Egyptian Address',
            'address_uae_en' => 'English Emirates Address',
            'address_ksa_en' => 'English Saudi Address',

        ]);
        $setting->update($request->all());
        Session::flash('Updated', 'Settings Updated Successfully');
        return redirect('admin/settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use Session;
class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table='Partners';
        $partners=Partner::all();
        return view('backend/partners.index',compact('table','partners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments=Department::all();
        return view('backend/partners.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title_en' => 'required|regex: /^[\s\p{N} a-zA-Z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'image'=>'required|image',
       //     'link'=>'url'
        ],[],[
            'title_en'=>'English Title',
            'title_ar'=>'Arabic Title',

        ]);
        $input=$request->all();
        $department_name = Department::find($request->input('department_id'))->title_en;
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/partners/' . $department_name . '/', $name);
            $input['image'] = $name;
        }
        Partner::create($input);
        Session::flash('Added','Partner Added Successfully');
        return redirect('admin/partners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $partner=Partner::find($id);
        return view('backend/partners.show',compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $partner=Partner::find($id);
        return view('backend/partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title_en' => 'required|regex: /^[\s\p{N} a-zA-Z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
          //  'link'=>'url'
        ],[],[
            'title_en'=>'English Title',
            'title_ar'=>'Arabic Title',

        ]);
        $input=$request->all();
        $partner=Partner::find($id);

        if ($file = $request->file('image')) {
            $image = $partner->image;
            $department_name=Department::find($partner->department_id)->title_en;
            if (file_exists(public_path() . '/partners/'.$department_name.'/'. $image)) {
                unlink(public_path() . '/partners/'.$department_name.'/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/partners/'.$department_name, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $partner->image;
        }
        $partner->update($input);
        Session::flash('Updated', 'Partner Updated Successfully');
        return redirect('admin/partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $partner = Partner::find($id);
        $image = $partner->image;
        $department_name = Department::find($partner->department_id)->title_en;
        $partner->delete();
        if (file_exists(public_path() . '/partners/' . $department_name . '/' . $image)) {
            unlink(public_path() . '/partners/' . $department_name . '/' . $image);
        }
        Session::flash('Deleted', 'Partner Deleted Successfully');
        return redirect('admin/partners');
    }
}

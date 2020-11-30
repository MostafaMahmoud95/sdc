<?php

namespace App\Http\Controllers\Backend;

use App\Service;
use App\ServiceGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use Session;
use File;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table='Services';
        $services=Service::all();
        return view('backend/services.index',compact('table','services'));

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
        return view('backend/services.create', compact('departments'));
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
            'title_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'image' => 'required|image',
            'intro_ar'=>'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en'=>'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar'=>'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en'=>'required|regex: /^[\s\p{N} a-z A-z ]+/'

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'intro_ar'=>'Arabic Introduction',
            'intro_en'=>'English Introduction',
            'description_ar'=>'Arabic Description',
            'description_en'=>'English Description'

        ]);
        $department_name = Department::find($request->input('department_id'))->title_en;
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/services/' . $department_name . '/', $name);
            $input['image'] = $name;
        }
        Service::create($input);
        Session::flash('Added', 'New service Added Successfully');
        return redirect('admin/services');
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
        $service=Service::find($id);
        return view('backend/services.show',compact('service'));
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
        $service = Service::find($id);
        return view('backend/services.edit', compact('service'));
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
            'title_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'image' => 'image',
            'intro_ar'=>'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en'=>'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar'=>'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en'=>'required|regex: /^[\s\p{N} a-z A-z ]+/'

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'intro_ar'=>'Arabic Introduction',
            'intro_en'=>'English Introduction',
            'description_ar'=>'Arabic Description',
            'description_en'=>'English Description'

        ]);
        $input = $request->all();
        $service = Service::find($id);
        if ($file = $request->file('image')) {
            $image = Service::find($id)->image;
            $department_name = Department::find($request->department_id)->title_en;
            if (file_exists(public_path() . '/services/' . $department_name . '/' . $image)) {
                unlink(public_path() . '/services/' . $department_name . '/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/services/' . $department_name, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $service->image;
        }
        $service->update($input);
        Session::flash('Updated', ' Service Updated Successfully');
        return redirect('admin/services');
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
        $service = Service::find($id);
        $image = Service::find($id)->image;
        $department_name = Department::find($service->department_id)->title_en;
        $service->delete();
        if (file_exists(public_path() . '/services/' . $department_name . '/' . $image)) {
            unlink(public_path() . '/services/' . $department_name . '/' . $image);
        }
        if (file_exists(public_path() . '/servicesgalleries/' . $service->id)) {
            File::deleteDirectory(public_path('servicesgalleries/' . $service->id));
        }
        Session::flash('Deleted', 'Service Deleted Successfully');
        return redirect('admin/services');
    }
    public function UploadImages(Request $request)
    {
        $images_number = count($request->file('image'));
        $service_id = $request->input('service_id');
        $images = $request->file('image');
        $nicename=[];
        $i = 0;
        foreach ($images as $image) {
            $nicename['image.' . $i] = 'Image Number (' . ($i+1) . ')';
            $i++;
        }
        $this->validate($request, ['image.*' => 'required|image'],[],$nicename);
        /*     $rules = [];
             foreach (range(0, $images_number) as $image) {
                 $rules['image.(' . $image . ')'] = 'image|mimes:jpeg,bmp,png|max:2000';
             }
             $request->validate($request->all(), $rules);*/
        $input = $request->all();
        foreach ($images as $image) {
            $name = time() . $image->getClientOriginalName();
            $image->move('public/servicesgalleries/' . $service_id, $name);
            $input['image'] = $name;
            ServiceGallery::create($input);

        }
        Session::flash('Are Added', 'Images Are Added Successfully');
        return redirect('admin/services');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'Sliders';
        $sliders = Slider::all();
        return view('backend/sliders.index', compact('table', 'sliders'));

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
        return view('backend/sliders.create', compact('departments'));
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
            'department_id' => 'required',
            'image' => 'required|image'
        ]);
        $department_name = Department::find($request->input('department_id'))->title_en;
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/sliders/' . $department_name . '/', $name);
            $input['image'] = $name;
        }
        Slider::create($input);
        Session::flash('Added', 'New Slider Added Successfully');
        return redirect('admin/sliders');

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
        $slider = Slider::find($id);
        return view('backend/sliders.show',compact('slider'));
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
        $slider = Slider::find($id);
        return view('backend/sliders.edit', compact('slider'));
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
        $slider = Slider::find($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $image = Slider::find($id)->image;
            $department_name = Department::find($request->department_id)->title_en;
            if (file_exists(public_path() . '/sliders/' . $department_name . '/' . $image)) {
                unlink(public_path() . '/sliders/' . $department_name . '/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/sliders/' . $department_name, $name);
            $input['image'] = $name;}
            else{
            $input['image']=$slider->image;
            }
            $slider->update($input);
            Session::flash('Updated', 'Slider Updated Successfully');
            return redirect('admin/sliders');

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
        $slider = Slider::find($id);
        $image = Slider::find($id)->image;
        $department_name = Department::find($slider->department_id)->title_en;
        $slider->delete();
        if (file_exists(public_path() . '/sliders/' . $department_name . '/' . $image)) {
            unlink(public_path() . '/sliders/' . $department_name . '/' . $image);
        }
        Session::flash('Deleted', 'Slider Deleted Successfully');
        return redirect('admin/sliders');

    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'Jobs';
        $jobs = Job::all();
        return view('backend/jobs.index', compact('table', 'jobs'));

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
        return view('backend/jobs.create', compact('departments'));
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
            'title_en' => 'required|regex: /^[\s\p{N} a-zA-Z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'image' => 'required|image',
      /*      'location_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'location_en' => 'required|regex: /^[\s\p{N} a-zA-Z ]+/',*/
            'salary' => 'required|numeric',
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'requirements_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'requirements_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/'

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'location_ar' => 'Arabic Location',
            'location_en' => 'English Location',
            'intro_ar' => 'Arabic Introduction',
            'intro_en' => 'English Introduction',
            'description_ar' => 'Arabic Description',
            'description_en' => 'English Description',
            'requirements_ar' => 'Arabic Requirements',
            'requirements_en' => 'English Requirements',

        ]);
        $input = $request->all();

        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/jobs/', $name);
            $input['image'] = $name;
        }
        Job::create($input);
        Session::flash('Added', 'Job Added Successfully');
        return redirect('admin/jobs');
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
        $job=Job::find($id);
        return view('backend/jobs.show',compact('job'));
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
        $job = Job::find($id);
        return view('backend/jobs.edit', compact('job'));
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
        $request->validate([
            'title_en' => 'required|regex: /^[\s\p{N} a-zA-Z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'location_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'location_en' => 'required|regex: /^[\s\p{N} a-zA-Z ]+/',
            'salary' => 'required|numeric',
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'requirements_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'requirements_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/'

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'location_ar' => 'Arabic Location',
            'location_en' => 'English Location',
            'intro_ar' => 'Arabic Introduction',
            'intro_en' => 'English Introduction',
            'description_ar' => 'Arabic Description',
            'description_en' => 'English Description',
            'requirements_ar' => 'Arabic Requirements',
            'requirements_en' => 'English Requirements',

        ]);
        $job = Job::find($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $image = Job::find($id)->image;
            if (file_exists(public_path() . '/jobs/' . $image)) {
                unlink(public_path() . '/jobs/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/jobs/', $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $job->image;
        }
        $job->update($input);
        Session::flash('Updated', 'Job Updated Successfully');
        return redirect('admin/jobs');
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
        $job = Job::find($id);
        $image = Job::find($id)->image;
        $job->delete();
        if (file_exists(public_path() . '/jobs/' . $image)) {
            unlink(public_path() . '/jobs/' . $image);
        }
        Session::flash('Deleted', 'Job Deleted Successfully');
        return redirect('admin/jobs');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'News';
        $news = News::all();
        return view('backend/news.index', compact('table', 'news'));

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
        return view('backend/news.create', compact('departments'));
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
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',


        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'intro_ar' => 'Arabic Introduction',
            'intro_en' => 'English Introduction',
            'description_ar' => 'Arabic Description',
            'description_en' => 'English Description',


        ]);
        $input = $request->all();
        $department_name = Department::find($request->department_id)->title_en;
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/news/' . $department_name . '/', $name);
            $input['image'] = $name;
        }
        News::create($input);
        Session::flash('Added', 'News Added Successfully');
        return redirect('admin/news');

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
        $news=News::find($id);
        return view('backend/news.show',compact('news'));
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
        $news = News::find($id);
        return view('backend/news.edit', compact('news'));
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
            'image' => 'image',
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'intro_ar' => 'Arabic Introduction',
            'intro_en' => 'English Introduction',
            'description_ar' => 'Arabic Description',
            'description_en' => 'English Description',


        ]);

        $news = News::find($id);
        $input = $request->all();
        $department_name = Department::find($request->department_id)->title_en;
        if ($file = $request->file('image')) {
            $image = News::find($id)->image;
            if (file_exists(public_path() . '/news/' . $department_name . '/' . $image)) {
                unlink(public_path() . '/news/' . $department_name . '/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/news/'.$department_name, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $news->image;
        }
        $news->update($input);
        Session::flash('Updated', 'News Updated Successfully');
        return redirect('admin/news');

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
        $news = News::find($id);
        $image = $news->image;
        $department_name=Department::find($news->department_id)->title_en;
        $news->delete();
        if (file_exists(public_path() . '/news/'.$department_name.'/'.$image)) {
            unlink(public_path() . '/news/'.$department_name.'/'.$image);
        }
        Session::flash('Deleted', 'News Deleted Successfully');
        return redirect('admin/news');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Department;
use App\Product;
use App\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'Products';
        $products = Product::all();
        return view('backend/products.index', compact('table', 'products'));

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
        return view('backend/products.create', compact('departments'));
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
            'title_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'image' => 'required|image',
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/'

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'intro_ar' => 'Arabic Introduction',
            'intro_en' => 'English Introduction',
            'description_ar' => 'Arabic Description',
            'description_en' => 'English Description'

        ]);
        $department_name = Department::find($request->input('department_id'))->title_en;
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/products/' . $department_name . '/', $name);
            $input['image'] = $name;
        }
        Product::create($input);
        Session::flash('Added', 'New Product Added Successfully');
        return redirect('admin/products');

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
        $product = Product::find($id);
        return view('backend/products.show', compact('product'));
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
        $product = Product::find($id);
        return view('backend/products.edit', compact('product'));
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
            'title_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'title_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'image' => 'image',
            'intro_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'intro_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/',
            'description_ar' => 'required|regex: /^[\p{Arabic}\s\p{N}]+$/u',
            'description_en' => 'required|regex: /^[\s\p{N} a-z A-z ]+/'

        ], [], [
            'title_en' => 'English Title',
            'title_ar' => 'Arabic Title',
            'intro_ar' => 'Arabic Introduction',
            'intro_en' => 'English Introduction',
            'description_ar' => 'Arabic Description',
            'description_en' => 'English Description'
        ]);
        $input = $request->all();
        $product = Product::find($id);
        if ($file = $request->file('image')) {
            $image = Product::find($id)->image;
            $department_name = Department::find($request->department_id)->title_en;
            if (file_exists(public_path() . '/products/' . $department_name . '/' . $image)) {
                unlink(public_path() . '/products/' . $department_name . '/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/products/' . $department_name, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $product->image;
        }
        $product->update($input);
        Session::flash('Updated', ' Product Updated Successfully');
        return redirect('admin/products');
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
        $product = Product::find($id);
        $image = Product::find($id)->image;
        $department_name = Department::find($product->department_id)->title_en;
        $product->delete();
        if (file_exists(public_path() . '/products/' . $department_name . '/' . $image)) {
            unlink(public_path() . '/products/' . $department_name . '/' . $image);
        }
        if (file_exists(public_path() . '/productsgalleries/' . $product->id)) {
            File::deleteDirectory(public_path('productsgalleries/' . $product->id));
        }
        Session::flash('Deleted', 'Product Deleted Successfully');
        return redirect('admin/products');
    }

    public function UploadImages(Request $request)
    {
        $images_number = count($request->file('image'));
        $product_id = $request->input('product_id');
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
            $image->move('public/productsgalleries/' . $product_id, $name);
            $input['image'] = $name;
            ProductGallery::create($input);

        }
        Session::flash('Are Added', 'Images Are Added Successfully');
        return redirect('admin/products');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\ProductGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductsGalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'Products Gallery';
        $products_galleries = ProductGallery::all();
        return view('backend/productgallery.index', compact('table', 'products_galleries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        return view('backend/productgallery.create', compact('products'));
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
            'image' => 'required|image',
        ]);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/productsgalleries/' . $request->product_id . '/', $name);
            $input['image'] = $name;
        }
        ProductGallery::create($input);
        Session::flash('Added', 'Product Image Added Successfully');
        return redirect('admin/productsimages');

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
        $product_gallery = ProductGallery::find($id);
        return view('backend/productgallery.edit', compact('product_gallery'));
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
        $productgallery = ProductGallery::find($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $product = Product::find($productgallery->product_id)->id;
            if (file_exists(public_path() . '/productsgalleries/' . $product . '/' . $productgallery->image)) {
                unlink(public_path() . '/productsgalleries/' . $product . '/' . $productgallery->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/productsgalleries/' . $product, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $productgallery->image;
        }
        $productgallery->update($input);
        Session::flash('Updated', 'Product Image Updated Successfully');
        return redirect('admin/productsimages');
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
        $product_gallery = ProductGallery::find($id);
        $image = ProductGallery::find($id)->image;
        $product_id = Product::find($product_gallery->product_id)->id;
        $product_gallery->delete();
        if (file_exists(public_path() . '/productsgalleries/' . $product_id . '/' . $image)) {
            unlink(public_path() . '/productsgalleries/' . $product_id . '/' . $image);
        }
        Session::flash('Deleted', 'Product Image Deleted Successfully');
        return redirect('admin/productsimages');


    }
}

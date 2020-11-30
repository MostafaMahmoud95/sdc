<?php

namespace App\Http\Controllers\Backend;

use App\Service;
use App\ServiceGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class ServicesGalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = 'Services Galleries';
        $services_galleries = ServiceGallery::all();
        return view('backend/servicegallery.index', compact('table', 'services_galleries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services = Service::all();
        return view('backend/servicegallery.create', compact('services'));
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
            $file->move('public/servicesgalleries/' . $request->service_id . '/', $name);
            $input['image'] = $name;
        }
        ServiceGallery::create($input);
        Session::flash('Added', 'Service Image Added Successfully');
        return redirect('admin/servicegallery');
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
        $service_gallery = ServiceGallery::find($id);
        return view('backend/servicegallery.edit', compact('service_gallery'));
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
        $servicegallery = ServiceGallery::find($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $service = Service::find($servicegallery->service_id)->id;
            if (file_exists(public_path() . '/servicesgalleries/' . $service . '/' . $servicegallery->image)) {
                unlink(public_path() . '/servicesgalleries/' . $service . '/' . $servicegallery->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/servicesgalleries/' . $service, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $servicegallery->image;
        }
        $servicegallery->update($input);
        Session::flash('Updated', 'Service Image Updated Successfully');
        return redirect('admin/servicegallery');
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
        $service_gallery = ServiceGallery::find($id);
        $image = ServiceGallery::find($id)->image;
        $service_id = Service::find($service_gallery->service_id)->id;
        $service_gallery->delete();
        if (file_exists(public_path() . '/servicesgalleries/' . $service_id . '/' . $image)) {
            unlink(public_path() . '/servicesgalleries/' . $service_id . '/' . $image);
        }

        Session::flash('Deleted', 'Service Image Deleted Successfully');
        return redirect('admin/servicegallery');
    }
}

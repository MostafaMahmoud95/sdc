<?php

namespace App\Http\Controllers\Backend;

use App\Customer;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table='Customers';
        $customers=Customer::all();
        return view('backend/customers.index',compact('table','customers'));

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
        return view('backend/customers.create',compact('departments'));
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
          //  'link'=>'url'
        ],[],[
            'title_en'=>'English Title',
            'title_ar'=>'Arabic Title',

        ]);
        $input=$request->all();
        $department_name = Department::find($request->input('department_id'))->title_en;
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/customers/' . $department_name . '/', $name);
            $input['image'] = $name;
        }
        Customer::create($input);
        Session::flash('Added','Customer Added Successfully');
        return redirect('admin/customers');
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
        $customer=Customer::find($id);
        return view('backend/customers.show',compact('customer'));
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
        $customer=Customer::find($id);
        return view('backend/customers.edit',compact('customer'));
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
         //   'link'=>'url'
        ],[],[
            'title_en'=>'English Title',
            'title_ar'=>'Arabic Title',

        ]);
        $input=$request->all();
        $customer=Customer::find($id);

        if ($file = $request->file('image')) {
            $image = $customer->image;
            $department_name=Department::find($customer->department_id)->title_en;
            if (file_exists(public_path() . '/customers/'.$department_name.'/'. $image)) {
                unlink(public_path() . '/customers/'.$department_name.'/' . $image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('public/customers/'.$department_name, $name);
            $input['image'] = $name;
        } else {
            $input['image'] = $customer->image;
        }
        $customer->update($input);
        Session::flash('Updated', 'Customer Updated Successfully');
        return redirect('admin/customers');
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
        $customer = Customer::find($id);
        $image = $customer->image;
        $department_name = Department::find($customer->department_id)->title_en;
        $customer->delete();
        if (file_exists(public_path() . '/customers/' . $department_name . '/' . $image)) {
            unlink(public_path() . '/customers/' . $department_name . '/' . $image);
        }
        Session::flash('Deleted', 'Customer Deleted Successfully');
        return redirect('admin/customers');
    }
}

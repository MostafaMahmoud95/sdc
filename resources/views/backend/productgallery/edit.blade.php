@extends('layouts.admin.admin')
@section('content')
    {{Form::open(['method'=>'PATCH','route'=>['productsimages.update',$product_gallery->id],'files'=>'true'])}}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="product">Product</label>
        <select class="form-control" id="product_cat_id" name="product_id">

            <option value="{{$product_gallery->product_id}}">{{$product_gallery->product->title_en}}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label><br>
        <input type="file" name="image" accept="image/*" >
        <p class="text-danger">{{$errors->first('image')}}</p>
        <img src="{{URL::to('public/productsgalleries/'.$product_gallery->product_id.'/'.$product_gallery->image)}}" style="height: 100px; width: 100px;">


    </div>


    {{--   <div class="form-group">
           <label for="message">Message:</label>
           <input type="text" name="message" class="form-control" required="required" id="message">
       </div>--}}
    <button type="submit" class="btn btn-default">Update</button>
    {{Form::close()}}
@stop

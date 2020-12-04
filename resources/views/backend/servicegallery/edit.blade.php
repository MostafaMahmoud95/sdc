@extends('layouts.admin.admin')
@section('content')
    {{Form::open(['method'=>'PATCH','route'=>['servicegallery.update',$service_gallery->id],'files'=>'true'])}}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="service">Service</label>
        <select class="form-control" id="service_cat_id" name="service_id">

            <option value="{{$service_gallery->service_id}}">{{$service_gallery->service->title_en}}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label><br>
        <input type="file" name="image" accept="image/*" >
        <p class="text-danger">{{$errors->first('image')}}</p>
        <img src="{{URL::to('servicesgalleries/'.$service_gallery->service_id.'/'.$service_gallery->image)}}" style="height: 100px; width: 100px;">


    </div>


    {{--   <div class="form-group">
           <label for="message">Message:</label>
           <input type="text" name="message" class="form-control" required="required" id="message">
       </div>--}}
    <button type="submit" class="btn btn-default">Update</button>
    {{Form::close()}}
@stop

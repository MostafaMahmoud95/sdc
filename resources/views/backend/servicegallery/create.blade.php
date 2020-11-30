@extends('layouts.admin.admin')
@section('content')
    <form action="{{route('servicegallery.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" id="service_cat_id" name="service_id">

                @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->title_en}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" accept="image/*" required="required">
            <p class="text-danger">{{$errors->first('image')}}</p>

        </div>


        {{--   <div class="form-group">
               <label for="message">Message:</label>
               <input type="text" name="message" class="form-control" required="required" id="message">
           </div>--}}
        <button type="submit" class="btn btn-default">Add</button>
    </form>
@stop

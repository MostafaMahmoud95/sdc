@extends('layouts.admin.admin')
@section('content')
    {{Form::open(['method'=>'PATCH','route'=>['sliders.update',$slider->id],'files'=>'true'])}}
    <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department_cat_id" name="department_id" >

            <option value="{{$slider->department_id}}">{{$slider->department->title_en}}</option>

        </select>

    </div>
    <div class="form-group">
        <label for="image">Image</label><br>
        <input type="file" name="image" accept="image/*">
        <p class="text-danger">{{$errors->first('image')}}</p>
        <img src="{{URL::to('sliders/'.$slider->department->title_en.'/'.$slider->image)}}" style="height: 200px; width: 200px;">

    </div>


    {{--   <div class="form-group">
           <label for="message">Message:</label>
           <input type="text" name="message" class="form-control" required="required" id="message">
       </div>--}}
    <button type="submit" class="btn btn-default">Update</button>

    {{Form::close()}}
@stop

@extends('layouts.admin.admin')
@section('content')
    {{Form::open(['method'=>'PATCH','route'=>['customers.update',$customer->id],'files'=>'true'])}}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department_cat_id" name="department_id">
            <option value="{{$customer->department_id}}">{{$customer->department->title_en}}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name_ar"> Name Arabic</label>
        <input type="text" name="title_ar" class="form-control" required="required" value="{{ $customer->title_ar }}">
        <p class="text-danger">{{$errors->first('title_ar')}}</p>

    </div>
    <div class="form-group">
        <label for="name_en"> Name English</label>
        <input type="text" name="title_en" class="form-control" required="required" value="{{ $customer->title_en }}">
        <p class="text-danger">{{$errors->first('title_en')}}</p>
    </div>
    <div class="form-group">
        <label for="image">Image</label><br>
        <input type="file" name="image" accept="image/*">
        <p class="text-danger">{{$errors->first('image')}}</p>
    </div>
    <div class="form-group">
        <label for="link"> Link</label>
        <input type="text" name="link" class="form-control"  value="{{$customer->link}}">
        <p class="text-danger">{{$errors->first('link')}}</p>
    </div>
    {{--   <div class="form-group">
           <label for="message">Message:</label>
           <input type="text" name="message" class="form-control" required="required" id="message">
       </div>--}}
    <button type="submit" class="btn btn-default">Update</button>
    {{Form::close()}}
@stop

@extends('layouts.admin.admin')
@section('content')

    <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="department">Department</label>
            <select class="form-control" id="department_cat_id" name="department_id">

                @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->title_en}}</option>
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

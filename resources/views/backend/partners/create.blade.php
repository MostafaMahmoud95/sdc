@extends('layouts.admin.admin')
@section('content')

    <form action="{{route('partners.store')}}" method="post" enctype="multipart/form-data">
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
            <label for="name_ar"> Name Arabic</label>
            <input type="text" name="title_ar" class="form-control" required="required" value="{{ old('title_ar') }}">
            <p class="text-danger">{{$errors->first('title_ar')}}</p>

        </div>
        <div class="form-group">
            <label for="name_en"> Name English</label>
            <input type="text" name="title_en" class="form-control" required="required" value="{{ old('title_en') }}">
            <p class="text-danger">{{$errors->first('title_en')}}</p>

        </div>
        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" accept="image/*" required="required">
            <p class="text-danger">{{$errors->first('image')}}</p>

        </div>
        <div class="form-group">
            <label for="link"> Link</label>
            <input type="text" name="link" class="form-control"  value="{{ old('link') }}">
            <p class="text-danger">{{$errors->first('link')}}</p>

        </div>


        {{--   <div class="form-group">
               <label for="message">Message:</label>
               <input type="text" name="message" class="form-control" required="required" id="message">
           </div>--}}
        <button type="submit" class="btn btn-default">Add</button>
    </form>
@stop

@extends('layouts.admin.admin')
@section('content')

    <form action="{{route('departments.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title_ar"> Title Arabic</label>
            <input type="text" name="title_ar" class="form-control" required="required" value="{{ old('title_ar') }}">
            <p class="text-danger">{{$errors->first('title_ar')}}</p>

        </div>
        <div class="form-group">
            <label for="title_en">Title English</label>
            <input type="text" name="title_en" class="form-control" required="required" value="{{ old('title_en') }}">
            <p class="text-danger">{{$errors->first('title_en')}}</p>

        </div>
        <button type="submit" class="btn btn-default">Add</button>
    </form>
@stop

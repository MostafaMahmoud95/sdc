@extends('layouts.admin.admin')
@section('content')
    <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
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
            <label for="title_ar"> Title Arabic</label>
            <input type="text" name="title_ar" class="form-control" required="required" value="{{ old('title_ar') }}">
            <p class="text-danger">{{$errors->first('title_ar')}}</p>

        </div>
        <div class="form-group">
            <label for="title_ar"> Title English</label>
            <input type="text" name="title_en" class="form-control" required="required" value="{{ old('title_en') }}">
            <p class="text-danger">{{$errors->first('title_en')}}</p>

        </div>

        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" accept="image/*" required="required">
            <p class="text-danger">{{$errors->first('image')}}</p>

        </div>
        <div class="form-group">
            <label for="intro_ar"> Intro Arabic</label>
            <div class="row">
                <div class="col-sm-12">

                        <textarea class="form-control" rows="5" name="intro_ar" >{{ old('intro_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('intro_ar')}}</p>



                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="intro_en"> Intro English</label>
            <div class="row">
                <div class="col-sm-12">


                        <textarea  class="form-control" rows="5" name="intro_en" >{{ old('intro_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('intro_en')}}</p>


                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="description_ar"> Description Arabic</label>
            <div class="row">
                <div class="col-sm-12">


                        <textarea class="form-control" rows="5" name="description_ar" >{{ old('description_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('description_ar')}}</p>

                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="description_en"> Description English</label>
            <div class="row">
                <div class="col-sm-12">

                        <textarea class="form-control" rows="5" name="description_en" >{{ old('description_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('description_en')}}</p>



                </div>
            </div>

        </div>


        {{--   <div class="form-group">
               <label for="message">Message:</label>
               <input type="text" name="message" class="form-control" required="required" id="message">
           </div>--}}
        <button type="submit" class="btn btn-default">Add</button>
    </form>

@stop

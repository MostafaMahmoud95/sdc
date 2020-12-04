@extends('layouts.admin.admin')
@section('content')
    {{Form::open(['method'=>'PATCH','route'=>['jobs.update',$job->id],'files'=>'true'])}}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department_cat_id" name="department_id">


            <option value="{{$job->department_id}}">{{$job->department->title_en}}</option>

        </select>
    </div>
    <div class="form-group">
        <label for="title_ar"> Title Arabic</label>
        <input type="text" name="title_ar" class="form-control" required="required" value="{{$job->title_ar}}">
        <p class="text-danger">{{$errors->first('title_ar')}}</p>

    </div>
    <div class="form-group">
        <label for="title_ar"> Title English</label>
        <input type="text" name="title_en" class="form-control" required="required" value="{{ $job->title_en }}">
        <p class="text-danger">{{$errors->first('title_en')}}</p>

    </div>

    <div class="form-group">
        <label for="image">Image</label><br>
        <input type="file" name="image" accept="image/*">
        <p class="text-danger">{{$errors->first('image')}}</p>
        <img src="{{URL::to('jobs/'.$job->image)}}" style="height: 100px; width: 100px;">
    </div>
    <div class="form-group">
        <label for="intro_ar"> Intro Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                    <textarea class="form-control" rows="5" name="intro_ar">{{ $job->intro_ar }}</textarea>
                    <p class="text-danger">{{$errors->first('intro_ar')}}</p>



            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="intro_en"> Intro English</label>
        <div class="row">
            <div class="col-sm-12">


                    <textarea class="form-control" rows="5" name="intro_en">{{ $job->intro_en }}</textarea>
                    <p class="text-danger">{{$errors->first('intro_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="description_ar"> Description Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                    <textarea class="form-control" rows="5" name="description_ar">{{ $job->description_ar }}</textarea>
                    <p class="text-danger">{{$errors->first('description_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="description_en"> Description English</label>
        <div class="row">
            <div class="col-sm-12">


                    <textarea class="form-control" rows="5" name="description_en">{{ $job->description_en }}</textarea>
                    <p class="text-danger">{{$errors->first('description_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="requirements_ar"> Requirements Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                    <textarea  class="form-control" rows="5" name="requirements_ar">{{ $job->requirements_ar }}</textarea>
                    <p class="text-danger">{{$errors->first('requirements_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="requirements_en"> Requirements English</label>
        <div class="row">
            <div class="col-sm-12">


                    <textarea class="form-control" rows="015" name="requirements_en">{{ $job->requirements_en }}</textarea>
                    <p class="text-danger">{{$errors->first('requirements_en')}}</p>


            </div>
        </div>

    </div>

    <div class="form-group">
        <label for="location_ar"> Location Arabic</label>
        <input type="text" name="location_ar" class="form-control" required="required" value="{{ $job->location_ar }}">
        <p class="text-danger">{{$errors->first('location_ar')}}</p>

    </div>
    <div class="form-group">
        <label for="location_en"> Location English</label>
        <input type="text" name="location_en" class="form-control" required="required" value="{{ $job->location_en }}">
        <p class="text-danger">{{$errors->first('location_en')}}</p>

    </div>
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" name="salary" class="form-control" required="required" value="{{ $job->salary }}">
        <p class="text-danger">{{$errors->first('salary')}}</p>

    </div>


    {{--   <div class="form-group">
           <label for="message">Message:</label>
           <input type="text" name="message" class="form-control" required="required" id="message">
       </div>--}}
    <button type="submit" class="btn btn-default">Update</button>
    {{Form::close()}}

@stop

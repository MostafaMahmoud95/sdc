@extends('layouts.admin.admin')
@section('content')
    {{Form::open(['method'=>'PATCH','route'=>['settings.update',$setting->id]])}}

    {{ csrf_field() }}
    <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department_cat_id" name="department_id">


            <option value="{{$setting->department_id}}">{{$setting->department->title_en}}</option>

        </select>
    </div>
    <div class="form-group">
        <label for="intro_ar"> Intro Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="intro_ar">{{ $setting->intro_ar }}</textarea>
                <p class="text-danger">{{$errors->first('intro_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="intro_en"> Intro English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="intro_en">{{ $setting->intro_en }}</textarea>
                <p class="text-danger">{{$errors->first('intro_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="vision_ar"> Vision Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="vision_ar">{{$setting->vision_ar}}</textarea>
                <p class="text-danger">{{$errors->first('vision_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="vision_en"> Vision English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="vision_en">{{$setting->vision_en}}</textarea>
                <p class="text-danger">{{$errors->first('vision_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="message_ar"> Message Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="message_ar">{{$setting->message_ar}}</textarea>
                <p class="text-danger">{{$errors->first('message_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="message_en"> Message English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="message_en">{{$setting->message_en}}</textarea>
                <p class="text-danger">{{$errors->first('message_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="mission_ar"> Mission Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="mission_ar">{{$setting->mission_ar}}</textarea>
                <p class="text-danger">{{$errors->first('mission_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="mission_en"> Mission English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="mission_en">{{$setting->mission_en}}</textarea>
                <p class="text-danger">{{$errors->first('mission_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="goal_ar"> Goal Arabic</label>
        <div class="row">
            <div class="col-sm-12">

                <textarea class="form-control" rows="10" name="goal_ar">{{$setting->goal_ar}}</textarea>
                <p class="text-danger">{{$errors->first('goal_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="goal_en"> Goal English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="goal_en">{{$setting->goal_en}}</textarea>
                <p class="text-danger">{{$errors->first('goal_en')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="values_ar"> Values Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="values_ar">{{$setting->values_ar}}</textarea>
                <p class="text-danger">{{$errors->first('values_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="values_en"> Values English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="values_en">{{$setting->values_en}}</textarea>
                <p class="text-danger">{{$errors->first('values_en')}}</p>

            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="whyus_ar"> Whyus Arabic</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="whyus_ar">{{$setting->whyus_ar}}</textarea>
                <p class="text-danger">{{$errors->first('whyus_ar')}}</p>


            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="whyus_en"> Whyus English</label>
        <div class="row">
            <div class="col-sm-12">


                <textarea class="form-control" rows="10" name="whyus_en">{{$setting->whyus_en}}</textarea>
                <p class="text-danger">{{$errors->first('whyus_en')}}</p>


            </div>
        </div>

    </div>

    <div class="form-group">
        <label for="address_eg_ar"> Egyptian Address Arabic</label>
        <input type="text" name="address_eg_ar" class="form-control" required="required"
               value="{{ $setting->address_eg_ar }}">
        <p class="text-danger">{{$errors->first('address_eg_ar')}}</p>

    </div>
    <div class="form-group">
        <label for="address_eg_en"> Egyptian Address English</label>
        <input type="text" name="address_eg_en" class="form-control" required="required"
               value="{{ $setting->address_eg_en }}">
        <p class="text-danger">{{$errors->first('address_eg_en')}}</p>

    </div>
    <div class="form-group">
        <label for="address_ksa_ar"> Saudi Address Arabic</label>
        <input type="text" name="address_ksa_ar" class="form-control" required="required"
               value="{{ $setting->address_ksa_ar }}">
        <p class="text-danger">{{$errors->first('address_ksa_ar')}}</p>

    </div>
    <div class="form-group">
        <label for="address_ksa_en"> Saudi Address English</label>
        <input type="text" name="address_ksa_en" class="form-control" required="required"
               value="{{ $setting->address_ksa_en }}">
        <p class="text-danger">{{$errors->first('address_ksa_en')}}</p>

    </div>
    <div class="form-group">
        <label for="address_uae_ar"> Emirates Address Arabic</label>
        <input type="text" name="address_uae_ar" class="form-control" required="required"
               value="{{ $setting->address_uae_ar }}">
        <p class="text-danger">{{$errors->first('address_uae_ar')}}</p>

    </div>
    <div class="form-group">
        <label for="address_uae_en"> Emirates Address English</label>
        <input type="text" name="address_uae_en" class="form-control" required="required"
               value="{{ $setting->address_uae_en }}">
        <p class="text-danger">{{$errors->first('address_uae_en')}}</p>

    </div>

    <div class="form-group">
        <label for="email_egy"> Egyptian Email</label>
        <input type="email" name="email_egy" class="form-control" required="required" value="{{ $setting->email_egy }}">
        <p class="text-danger">{{$errors->first('email_egy')}}</p>

    </div>
    <div class="form-group">
        <label for="email_uae"> Emirates Email</label>
        <input type="email" name="email_uae" class="form-control" required="required" value="{{ $setting->email_uae }}">
        <p class="text-danger">{{$errors->first('email_uae')}}</p>

    </div>
    <div class="form-group">
        <label for="email_ksa"> Saudi Email</label>
        <input type="email" name="email_ksa" class="form-control" required="required" value="{{ $setting->email_ksa }}">
        <p class="text-danger">{{$errors->first('email_ksa')}}</p>

    </div>
    <div class="form-group">
        <label for="phone_eg"> Egyptian Phone</label>
        <input type="text" name="phone_eg" class="form-control" required="required" value="{{ $setting->phone_eg }}">
        <p class="text-danger">{{$errors->first('phone_eg')}}</p>

    </div>
    <div class="form-group">
        <label for="phone_uae"> Emirates Phone</label>
        <input type="text" name="phone_uae" class="form-control" required="required" value="{{ $setting->phone_uae }}">
        <p class="text-danger">{{$errors->first('phone_uae')}}</p>

    </div>
    <div class="form-group">
        <label for="phone_ksa"> Saudi Phone</label>
        <input type="text" name="phone_ksa" class="form-control" required="required" value="{{ $setting->phone_ksa }}">
        <p class="text-danger">{{$errors->first('phone_ksa')}}</p>

    </div>
    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" name="facebook" class="form-control" required="required" value="{{ $setting->facebook }}">
        <p class="text-danger">{{$errors->first('facebook')}}</p>

    </div>
    <div class="form-group">
        <label for="youtube">Youtube</label>
        <input type="text" name="youtube" class="form-control" required="required" value="{{ $setting->youtube }}">
        <p class="text-danger">{{$errors->first('youtube')}}</p>

    </div>
    <div class="form-group">
        <label for="Google+">Google+</label>
        <input type="text" name="googleplus" class="form-control" required="required"
               value="{{ $setting->googleplus }}">
        <p class="text-danger">{{$errors->first('googleplus')}}</p>

    </div>
    <div class="form-group">
        <label for="Linkedin">Linkedin+</label>
        <input type="text" name="linkedin" class="form-control" required="required" value="{{ $setting->linkedin }}">
        <p class="text-danger">{{$errors->first('linkedin')}}</p>

    </div>
    <div class="form-group">
        <label for="twitter"> Twitter</label>
        <input type="text" name="twitter" class="form-control" required="required" value="{{ $setting->twitter }}">
        <p class="text-danger">{{$errors->first('twitter')}}</p>

    </div>


    {{--   <div class="form-group">
           <label for="message">Message:</label>
           <input type="text" name="message" class="form-control" required="required" id="message">
       </div>--}}
    <button type="submit" class="btn btn-default">Update</button>
    {{Form::close()}}


@stop

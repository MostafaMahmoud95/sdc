@extends('layouts.admin.admin')
@section('content')
    <form action="{{route('settings.store')}}" method="post">
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
            <label for="intro_ar"> Intro Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="intro_ar">{{ old('intro_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('intro_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="intro_en"> Intro English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="intro_en">{{ old('intro_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('intro_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="vision_ar"> Vision Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="vision_ar">{{ old('vision_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('vision_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="vision_en"> Vision English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="vision_en">{{ old('vision_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('vision_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="message_ar"> Message Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="message_ar">{{ old('message_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('message_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="message_en"> Message English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="message_en">{{ old('message_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('message_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="mission_ar"> Mission Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="mission_ar">{{ old('mission_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('mission_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="mission_en"> Mission English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="mission_en">{{ old('mission_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('mission_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="goal_ar"> Goal Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="goal_ar">{{ old('goal_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('goal_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="goal_en"> Goal English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="goal_en">{{ old('goal_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('goal_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="values_ar"> Values Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="values_ar">{{ old('values_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('values_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="values_en"> Values English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="values_en">{{ old('values_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('values_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="whyus_ar"> Whyus Arabic</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="whyus_ar">{{ old('whyus_ar') }}</textarea>
                        <p class="text-danger">{{$errors->first('whyus_ar')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="whyus_en"> Whyus English</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <textarea class="form-control" rows="5" name="whyus_en">{{ old('whyus_en') }}</textarea>
                        <p class="text-danger">{{$errors->first('whyus_en')}}</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="address_eg_ar"> Egyptian Address Arabic</label>
            <input type="text" name="address_eg_ar" class="form-control" required="required"
                   value="{{ old('address_eg_ar') }}">
            <p class="text-danger">{{$errors->first('address_eg_ar')}}</p>

        </div>
        <div class="form-group">
            <label for="address_eg_en">Egyptian Address English</label>
            <input type="text" name="address_eg_en" class="form-control" required="required"
                   value="{{ old('address_eg_en') }}">
            <p class="text-danger">{{$errors->first('address_eg_en')}}</p>

        </div>
        <div class="form-group">
            <label for="address_uae_ar"> Emirates Address Arabic</label>
            <input type="text" name="address_uae_ar" class="form-control" required="required"
                   value="{{ old('address_uae_ar') }}">
            <p class="text-danger">{{$errors->first('address_uae_ar')}}</p>

        </div>
        <div class="form-group">
            <label for="address_uae_en">Emirates Address English</label>
            <input type="text" name="address_uae_en" class="form-control" required="required"
                   value="{{ old('address_uae_en') }}">
            <p class="text-danger">{{$errors->first('address_uae_en')}}</p>

        </div>
        <div class="form-group">
            <label for="address_ksa_ar"> Saudi Address Arabic</label>
            <input type="text" name="address_ksa_ar" class="form-control" required="required"
                   value="{{ old('address_ksa_ar') }}">
            <p class="text-danger">{{$errors->first('address_ksa_ar')}}</p>

        </div>
        <div class="form-group">
            <label for="address_uae_en">Saudi Address English</label>
            <input type="text" name="address_ksa_en" class="form-control" required="required"
                   value="{{ old('address_ksa_en') }}">
            <p class="text-danger">{{$errors->first('address_ksa_en')}}</p>

        </div>
        <div class="form-group">
            <label for="email_egy">Egypt Email</label>
            <input type="email" name="email_egy" class="form-control" required="required" value="{{ old('email_egy') }}">
            <p class="text-danger">{{$errors->first('email_egy')}}</p>

        </div>  <div class="form-group">
            <label for="email_ksa">Saudi Email</label>
            <input type="email" name="email_ksa" class="form-control" required="required" value="{{ old('email_ksa') }}">
            <p class="text-danger">{{$errors->first('email_ksa')}}</p>

        </div>  <div class="form-group">
            <label for="email_uae">Emirates Email</label>
            <input type="email" name="email_uae" class="form-control" required="required" value="{{ old('email_uae') }}">
            <p class="text-danger">{{$errors->first('email_uae')}}</p>

        </div>
        <div class="form-group">
            <label for="phone_eg">Egypt Phone</label>
            <input type="text" name="phone_eg" class="form-control" required="required" value="{{ old('phone_eg') }}">
            <p class="text-danger">{{$errors->first('phone_eg')}}</p>

        </div>  <div class="form-group">
            <label for="phone_ksa">Saudi Phone</label>
            <input type="text" name="phone_ksa" class="form-control" required="required" value="{{ old('phone_ksa') }}">
            <p class="text-danger">{{$errors->first('phone_ksa')}}</p>

        </div>  <div class="form-group">
            <label for="phone_uae">Emirates Phone</label>
            <input type="text" name="phone_uae" class="form-control" required="required" value="{{ old('phone_uae') }}">
            <p class="text-danger">{{$errors->first('phone_uae')}}</p>

        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" class="form-control" required="required" value="{{ old('facebook') }}">
            <p class="text-danger">{{$errors->first('facebook')}}</p>

        </div>
        <div class="form-group">
            <label for="youtube">Youtube</label>
            <input type="text" name="youtube" class="form-control" required="required" value="{{ old('youtube') }}">
            <p class="text-danger">{{$errors->first('youtube')}}</p>

        </div>
        <div class="form-group">
            <label for="Google+">Google+</label>
            <input type="text" name="googleplus" class="form-control" required="required"
                   value="{{ old('googleplus') }}">
            <p class="text-danger">{{$errors->first('googleplus')}}</p>

        </div>
        <div class="form-group">
            <label for="Linkedin">Linkedin+</label>
            <input type="text" name="linkedin" class="form-control" required="required" value="{{ old('linkedin') }}">
            <p class="text-danger">{{$errors->first('linkedin')}}</p>

        </div>
        <div class="form-group">
            <label for="twitter"> Twitter</label>
            <input type="text" name="twitter" class="form-control" required="required" value="{{ old('twitter') }}">
            <p class="text-danger">{{$errors->first('twitter')}}</p>

        </div>


        {{--   <div class="form-group">
               <label for="message">Message:</label>
               <input type="text" name="message" class="form-control" required="required" id="message">
           </div>--}}
        <button type="submit" class="btn btn-default">Add</button>
    </form>


@stop

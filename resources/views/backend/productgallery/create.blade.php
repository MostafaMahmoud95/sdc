@extends('layouts.admin.admin')
@section('content')
    <form action="{{route('productsimages.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="department">Product</label>
            <select class="form-control" id="product_cat_id" name="product_id">

                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->title_en}}</option>
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

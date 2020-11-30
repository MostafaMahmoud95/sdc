<?php

namespace App\Http\Controllers\Frontend\ScientificDiamondCompany;

use App\Customer;
use App\Job;
use App\News;
use App\Partner;
use App\Product;
use App\ProductGallery;
use App\Service;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class HomePageController extends Controller
{
    //

    public function index()
    {
        $sliders = Slider::Where('department_id', 1)->get();
        $services = Service::orderBy('id', 'desc')->Where('department_id', 1)->take(3)->get();
        $products = Product::OrderBy('id', 'desc')->Where('department_id', 1)->take(6)->get();
        $latest_news = News::OrderBy('id', 'desc')->Where('department_id', 1)->take(5)->get();
        $customers = Customer::Where('department_id', 1)->get();

        return view('frontend.Scientific Diamond Company.index', compact('sliders', 'products', 'services', 'latest_news', 'customers'));
    }

    public function products()
    {
        $products = Product::where('department_id', 1)->get();
        return view('frontend.Scientific Diamond Company.products', compact('products'));

    }

    public function services()
    {
        $services = Service::where('department_id', 1)->get();
        return view('frontend.Scientific Diamond Company.services', compact('services'));

    }

    public function news()
    {
        $news = News::where('department_id', 1)->get();
        return view('frontend.Scientific Diamond Company.news', compact('news'));

    }

    public function jobs()
    {
        $jobs = Job::where('department_id', 1)->get();
        return view('frontend.Scientific Diamond Company.jobs', compact('jobs'));

    }

    public function customers()
    {
        $customers = Customer::Where('department_id', 1)->get();
        return view('frontend.Scientific Diamond Company.customers', compact('customers'));
    }

    public function partners()
    {
        $partners = Partner::Where('department_id', 1)->get();
        return view('frontend.Scientific Diamond Company.partners', compact('partners'));


    }

    public function about()
    {
        $settings = Setting::Where('department_id', 1)->first();
        return view('frontend.Scientific Diamond Company.about', compact('settings'));


    }

    public function contact()
    {
        $settings = Setting::Where('department_id', 1)->first();
        return view('frontend.Scientific Diamond Company.contact', compact('settings'));


    }

    public function GetProductDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $gallery = ProductGallery::where('product_id', $product->id)->get();
        return view('frontend.Scientific Diamond Company.product_details', compact('product', 'gallery'));
    }

    public function GetServiceDetails($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.Scientific Diamond Company.service_details', compact('service'));
    }

    public function GetNewsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('frontend.Scientific Diamond Company.news_details', compact('news'));
    }

    public function GetJobDetails($slug)
    {
        $job = Job::where('slug', $slug)->first();
        return view('frontend.Scientific Diamond Company.job_details', compact('job'));
    }

    public static function CurrentPage($url)
    {
        //  return strstr(request()->path(), $url); // work with slug as www.googansolutions.com/users/dashboard
        return request()->path() == $url;  // without slug  work as www.googansolutions.com/users
    }

}

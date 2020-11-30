<?php

namespace App\Http\Controllers\Frontend\Home;

use App\News;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Config;
class HomePageController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::where('department_id',0)->get();
        $news=News::orderBy('id', 'desc')->take(5)->get();

        return view('frontend.index', compact('sliders','news'));
    }
    public function set_lang($locale)
    {
        if (in_array($locale, Config::get('app.locales'))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}

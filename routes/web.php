<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['Local']], function () {
    Route::get('/', 'Frontend\Home\HomePageController@index');

    Route::get('setlang/{locale}', 'Frontend\Home\HomePageController@set_lang');
    // Scientific Diamond Company
    Route::get('sdc', 'Frontend\ScientificDiamondCompany\HomePageController@index');
    Route::get('sdc/customers', 'Frontend\ScientificDiamondCompany\HomePageController@customers');
    Route::get('sdc/partners', 'Frontend\ScientificDiamondCompany\HomePageController@partners');
    Route::get('sdc/about', 'Frontend\ScientificDiamondCompany\HomePageController@about');
    Route::get('sdc/contact', 'Frontend\ScientificDiamondCompany\HomePageController@contact');
    Route::get('sdc/products', 'Frontend\ScientificDiamondCompany\HomePageController@products');
    Route::get('sdc/products/{slug}', 'Frontend\ScientificDiamondCompany\HomePageController@GetProductDetails');
    Route::get('sdc/services', 'Frontend\ScientificDiamondCompany\HomePageController@services');
    Route::get('sdc/services/{slug}', 'Frontend\ScientificDiamondCompany\HomePageController@GetServiceDetails');
    Route::get('sdc/news', 'Frontend\ScientificDiamondCompany\HomePageController@news');
    Route::get('sdc/news/{slug}', 'Frontend\ScientificDiamondCompany\HomePageController@GetNewsDetails');
    Route::get('sdc/jobs', 'Frontend\ScientificDiamondCompany\HomePageController@jobs');
    Route::get('sdc/jobs/{slug}', 'Frontend\ScientificDiamondCompany\HomePageController@GetJobDetails');
    Route::POST('sdc/apply', 'Frontend\ScientificDiamondCompany\UserController@ApplyJob');
    Route::POST('sdc/contact', 'Frontend\ScientificDiamondCompany\UserController@contact');

    // Lab Department

    Route::get('sdclab', 'Frontend\ScientificDiamondLaboratory\HomePageController@index');
    Route::get('sdclab/customers', 'Frontend\ScientificDiamondLaboratory\HomePageController@customers');
    Route::get('sdclab/partners', 'Frontend\ScientificDiamondLaboratory\HomePageController@partners');
    Route::get('sdclab/about', 'Frontend\ScientificDiamondLaboratory\HomePageController@about');
    Route::get('sdclab/contact', 'Frontend\ScientificDiamondLaboratory\HomePageController@contact');
    Route::get('sdclab/products', 'Frontend\ScientificDiamondLaboratory\HomePageController@products');
    Route::get('sdclab/products/{slug}', 'Frontend\ScientificDiamondLaboratory\HomePageController@GetProductDetails');
    Route::get('sdclab/services', 'Frontend\ScientificDiamondLaboratory\HomePageController@services');
    Route::get('sdclab/services/{slug}', 'Frontend\ScientificDiamondLaboratory\HomePageController@GetServiceDetails');
    Route::get('sdclab/news', 'Frontend\ScientificDiamondLaboratory\HomePageController@news');
    Route::get('sdclab/news/{slug}', 'Frontend\ScientificDiamondLaboratory\HomePageController@GetNewsDetails');
    Route::get('sdclab/jobs', 'Frontend\ScientificDiamondLaboratory\HomePageController@jobs');
    Route::get('sdclab/jobs/{slug}', 'Frontend\ScientificDiamondLaboratory\HomePageController@GetJobDetails');
    Route::POST('sdclab/apply', 'Frontend\ScientificDiamondLaboratory\UserController@ApplyJob');
    Route::POST('sdclab/contact', 'Frontend\ScientificDiamondLaboratory\UserController@contact');


});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['Admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', function () {
            $contacts = \App\Contact::all()->count();
            $customers = \App\Customer::all()->count();
            $partners = \App\Partner::all()->count();
            $departments = \App\Department::all()->count();
            $jobs = \App\Job::all()->count();
            $news = \App\News::all()->count();
            $products = \App\Product::all()->count();
            $products_images = \App\ProductGallery::all()->count();
            $services = \App\Service::all()->count();
            $services_images = \App\ServiceGallery::all()->count();
            return view('backend.dashboard', compact('customers', 'contacts', 'products', 'partners', 'departments', 'jobs', 'news', 'products_images', 'services', 'services_images'));
        });
        Route::resource('departments', 'Backend\DepartmentsController');
        Route::resource('settings', 'Backend\SettingsController');
        Route::resource('sliders', 'Backend\SlidersController');
        Route::resource('products', 'Backend\ProductsController');
        Route::resource('productsimages', 'Backend\ProductsGalleriesController');
        Route::resource('services', 'Backend\ServicesController');
        Route::resource('servicegallery', 'Backend\ServicesGalleriesController');
        Route::resource('jobs', 'Backend\JobsController');
        Route::resource('jobrequests', 'Backend\JobRequestsController');
        Route::resource('news', 'Backend\NewsController');
        Route::resource('contacts', 'Backend\ContactsController');
        Route::resource('customers', 'Backend\CustomersController');
        Route::resource('partners', 'Backend\PartnersController');
        Route::POST('products/upload_images', 'Backend\ProductsController@UploadImages')->name('products.UploadImages');
        Route::POST('services/upload_images', 'Backend\ServicesController@UploadImages')->name('services.UploadImages');
    });

});



<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//الجيت بعرض الصفحه ت get=> view page and send data in url

//البوست ترسل بيانات
//post{put,push,delete} the put and push in the same use and using update the data ,delete{delete data} and post send data in the body request
Route::get('rana/profile{name?}',function($name=null){
return 'rana'.$name;
});//بدك تحط يزور ما بدك انت حر 
Route::get('rana/profile{name}',function($name){
    return 'rana'.$name;
    });//لازم تحطي اسم يزور انه كل يزورو بكون الو معلومات بيانات معينه زي انستا كل واحد عنده رابط اسمه 
    Route::post('rana/profile',function(){
        });//بوست تستخدم في فورم لارسال بيانات لداتا تكون محميه ام جيت ترسلها يو ار ال ما تكةن محميه يعني بوست بيانات حساسه  
        Route::get('rana/profile{id?}',function($id=null){
            if($id!=null){                //دائما نحط النفي داخل if

            return 'news'.$id;
            }
            return 'allnews';
            });//هنا لو اعطني رقم الخبر بجبلو الخبر نفسه ما اعطني بجبله كل اخبار
            Route::put('put',function(){
            })
            ;
             Route::delete('delete',function(){
            });
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function boot()
    {
        Schema::defaultStringLength(191);
        if(Auth::check()){
            $notifications = Notification::where('user',Auth::user()->id)->orderBy('created','desc')->get();            
        }

        app()->singleton('lang',function (){
            if (auth()->user()) {
                if (empty(auth()->user()->lang)) {
                    return 'en';
                }else{
                    return auth()->user()->lang;
                }
            }else{
                if (session()->has('lang')) {
                    return session()->get('lang');
                }else{
                    return 'en';
                }
            }
        });
    }
}

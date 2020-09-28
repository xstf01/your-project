<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "HelloServiceProvider.php@boot()<br />";
        $validator = $this->app['validator'];
        	
        $validator->resolver(function($translator, $data, 
        	  $rules, $messages) {
		echo "wrap";

               var_dump(new HelloValidator($translator, $data, 
        	     $rules, $messages));

		return new HelloValidator($translator, $data, 
        	     $rules, $messages);
        });
	
     }
}

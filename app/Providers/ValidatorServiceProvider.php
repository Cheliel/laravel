<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;


class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Validator::extend('password_complexe', function($attribute, $value, $parameters, $validator){
            return preg_match(' ^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$ ', $value);
        });
    }


    public function r(){

    }


    //validation.php => ajouter une clef + valeur pour tout les langues == affichage d el'erreur 
}

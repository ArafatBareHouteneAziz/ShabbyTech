<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (in_array($lang, ['en', 'fr'])) {
            // Set in session
            session()->put('locale', $lang);
            
            // Set in app
            app()->setLocale($lang);
            
            // Set in config runtime
            Config::set('app.locale', $lang);
            
            // Store in cookie for backup
            cookie()->queue('locale', $lang, 60*24*365);
        }
        
        return redirect()->back();
    }
} 
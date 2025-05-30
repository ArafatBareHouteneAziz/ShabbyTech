<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        // Validate the language
        if (!in_array($lang, ['en', 'fr'])) {
            $lang = 'en';
        }

        // Store the selected language in the session
        Session::put('locale', $lang);
        
        // Set the application locale
        App::setLocale($lang);
        
        return redirect()->back();
    }
} 
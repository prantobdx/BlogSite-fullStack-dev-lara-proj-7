<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view( 'front.home.home' );
    }

    public function contact()
    {
        return view( 'front.contact.contact' );
    }
    public function service()
    {
        return view( 'front.service.service' );
    }
}
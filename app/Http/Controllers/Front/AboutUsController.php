<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function __invoke () {
      $title =  'О нас - Babycheeks';
      return view('pages.about_us', compact('title'));
    }
}

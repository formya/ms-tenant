<?php

namespace Modules\Mk\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MkController extends Controller
{
   public function index()
   {
      return view('mk::index');
   }
}

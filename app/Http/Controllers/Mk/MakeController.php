<?php


namespace App\Http\Controllers\Mk;


use App\Http\Controllers\Controller;

class MakeController extends Controller
{
   function hello() {
      return response()->json([
         'hello' => 'hello world'
      ]);
   }
}
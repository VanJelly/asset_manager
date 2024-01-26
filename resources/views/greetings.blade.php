<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller

{
    public function home(){
    return "You have reached home page";
}
    public function greetings(){
    return "Hello World";
}
}
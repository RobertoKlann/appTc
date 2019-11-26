<?php

namespace App\Http\Controllers\BobWaiter;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function __constructor() {
        $this->middleware('auth');
    }

    public function index() {
        return view('app.home');
    }

}
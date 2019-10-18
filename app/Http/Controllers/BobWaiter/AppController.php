<?php

namespace App\Http\Controllers\BobWaiter;

use App\Http\Controllers\Controller;

/**
 * Controllador de usuário.
 *
 * @package Controller
 * @author  Roberto Klann
 * @since   27/08/2019
 */
class AppController extends Controller {

    public function index() {
        return view('app/ViewEstabelecimentos');
    }

}
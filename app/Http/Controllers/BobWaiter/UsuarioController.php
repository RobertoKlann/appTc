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
class UsuarioController extends Controller {

    public function createUsuario() {
        return view('app/ViewCadastroUsuario');
    }

    public function indexUsuario() {
        return view('app/ViewUsuario');
    }

}
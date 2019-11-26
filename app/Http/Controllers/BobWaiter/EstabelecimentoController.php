<?php

namespace App\Http\Controllers\BobWaiter;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;
use Response;

/**
 * Controllador de Estabelecimentos.
 *
 * @package Controller
 * @author  Roberto Klann
 * @since   27/08/2019
 */
class EstabelecimentoController extends Controller {

    public function __constructor() {
        $this->middleware('auth');
    }

    public function index() {
        $est = DB::select("SELECT * FROM tbestabelecimento");

        return view('app/ViewEstabelecimentos')->with('estabelecimentos', $est);
    }

    public function getCategorias($codigo) {
        $cat = DB::select("SELECT *
                             FROM tbcategoria
                            WHERE TRUE
                              AND estcodigo = " . $codigo);

        return view('app/ViewCardapio')->with('categorias', $cat);
    }

    public function getMesas($codigo) {
        $mesas = DB::select("SELECT msacodigo
                             FROM tbmesa
                            WHERE TRUE
                              AND estcodigo = " . $codigo);

        $max = DB::select("SELECT MAX(pedcodigo)
                             FROM tbpedido");

        return response()->json(['mesas' => $mesas, 'maxPed' => $max]);
    }

    public function produtoCategoria() {
        return view('app/ViewProdutoCategoria');
    }

}
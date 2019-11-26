<?php

namespace App\Http\Controllers\BobWaiter;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;

/**
 * Controllador de Pedidos.
 *
 * @package Controller
 * @author  Roberto Klann
 * @since   07/11/2019
 */
class CardapioController extends Controller {

    public function __constructor() {
        $this->middleware('auth');
    }

    public function getProdutosCategoria($codigo) {
        $pro = DB::select("SELECT *
                             FROM tbproduto
                             JOIN tbcategoria
                            USING (ctgcodigo)
                            WHERE TRUE
                              AND ctgcodigo = " . $codigo);

        return view('app/ViewProdutoCategoria')->with('produtos', $pro);
    }

    public function getProduto($codigos) {
        $aCodigos  = json_decode($codigos);
        $aProdutos = [];
        foreach($aCodigos as $codigo) {
            $aProdutos[] = $codigo->codigo;
        }

        $pro = DB::select("SELECT *
                             FROM tbproduto
                             JOIN tbcategoria
                            USING(ctgcodigo)
                            WHERE TRUE
                              AND prdcodigo IN (" . implode(', ', $aProdutos) . ")");

        return view('app/ViewProduto')->with('produtos', $pro);
    }

}
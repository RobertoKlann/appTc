<?php

namespace App\Http\Controllers\BobWaiter;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/**
 * Controllador de Pedidos.
 *
 * @package Controller
 * @author  Roberto Klann
 * @since   07/11/2019
 */
class PedidoController extends Controller {

    public function __constructor() {
        $this->middleware('auth');
    }

    public function index($codigo) {
        $pedidos = DB::select(
            "SELECT *
               FROM tbpedido
               JOIN tbmesa
              USING (msacodigo)
               JOIN tbestabelecimento
              USING (estcodigo)
              WHERE TRUE
                AND usucodigo = " . $codigo . "
           ORDER BY pedcodigo DESC"
        );

        return view('app/ViewPedidos')->with('pedidos', $pedidos);
    }

    public function store(Request $request) {
        $produtos = $request->input('produtos');
        $pedido   = $request->input('codigoPedido');
        $mesa     = $request->input('codigoMesa');
        $usuario  = $request->input('codigoUsuario');
        $estabel  = $request->input('codigoEst');

        DB::insert("INSERT INTO tbpedido
                         VALUES({$pedido}, {$usuario}, 1, {$mesa})");

        foreach($produtos as $produto) {
            DB::insert("INSERT INTO tbitempedido(pedcodigo, itpquantidade, prdcodigo)
                         VALUES({$pedido}, {$produto['quantidade']}, {$produto['codigoProduto']})");
        }

        return response()->json($pedido);
    }

    public function getPedido($codigo) {
        $pedidos = DB::select(
            "SELECT *
               FROM tbitempedido
               JOIN tbpedido
              USING (pedcodigo)
               JOIN tbproduto
              USING (prdcodigo)
               JOIN tbmesa
              USING (msacodigo)
               JOIN tbestabelecimento
              USING (estcodigo)
              WHERE TRUE
                AND pedcodigo = " . $codigo
        );

        return view('app/ViewPedido')->with('pedidos', $pedidos);
    }

    public function getValorTotalPedido($codigo) {
        $valorTotal = DB::select("
            SELECT ROUND(SUM(
                     itpquantidade * prdpreco
                   ), 2) valorTotal
              FROM tbitempedido
              JOIN tbproduto
             USING (prdcodigo)
             WHERE TRUE
               AND pedcodigo = " . $codigo
        );

        return response()->json($valorTotal);
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    //
    public function index()
    {
    	$pedidos = DB::table('pedidos')
            ->join('users', 'pedidos.user_id', '=', 'users.id')
            ->select('pedidos.*', 'users.name')->where('pedidos.fecha', date("Y-m-d"))->get();

            
            	
    	return view('pedidoshoy')->with('pedidos',$pedidos);
    }
}

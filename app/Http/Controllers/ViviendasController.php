<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Vivienda;

class ViviendasController extends Controller
{
    public function index()
    {
        $datos = DB::table('users as u')
            ->join( 'viviendas as v','v.id_usuario','u.id_user')
            ->get();
            //dd($datos);
        return view('viviendas.index', compact('datos'));
    }
    public function show($id_user)
    {
        $id = decrypt($id_user);
        $pendiente = 0;
        $user = DB::table('users as u')
        ->where('id_user',$id)
        ->first();

        $vivienda = DB::table('viviendas')
        ->where('id_usuario',$user->id_user)
        ->first();

        $ctacon = DB::table('cuotas')
            ->where('id_vivienda',$vivienda->id_usuario)
            ->get();
            //dd($ctacon);
        if ($ctacon != ""){
            $saldo = 0;
            foreach ($ctacon as $cc) {
                if ($cc->status == 'PENDIENTE'){
                    $float = (float)$cc->saldo_cuota;
                    $saldo = $saldo + $float;
                }
                $pendiente = number_format($saldo, 2,',','.');
            }
        }
        //dd($saldo, $float, $pendiente);
        return view("viviendas.show", compact('user','vivienda','ctacon','pendiente'));
    }

}

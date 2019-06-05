<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;

class CuentasController extends Controller
{

    public function getIndex()
    {
        $arrayCuentas = Cuenta::all();
        return view('cuentas.index', array('arrayCuentas'=> $arrayCuentas));
    }

    public function getShow($id)
    {
        $cuenta = Cuenta::findOrFail($id);
        return view('cuentas.show', array(
            'cuenta' => $cuenta
        ));
    }

    public function getCreate()
    {
        return view('cuentas.create');
    }
    
    public function postCreate(Request $request)
    {
        return back();
    }

    public function getEdit($id)
    {
        $cuenta = Cuenta::findOrFail($id);
        return view('cuentas.edit', array(
            'cuenta' => $cuenta
        ));
    }

    public function putEdit(Request $request, $id)
    {
        return back();
    }


}

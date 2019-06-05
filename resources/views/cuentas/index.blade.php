@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $arrayCuentas as $cuenta )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/cuentas/show/' . $cuenta->id ) }}">
                    <img src="/bancoCuenta.jpg" title="Cuenta" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$cuenta->interes}}
                    </h4>
                    <h5 style="min-height:45px;margin:5px 0 10px 0">
                        {{$cuenta->tipo}}
                    </h5>
                    <h5 style="min-height:45px;margin:5px 0 10px 0">
                        {{$cuenta->saldo}} €
                    </h5>
                </a>

            </div>
        @endforeach

    </div>

@stop

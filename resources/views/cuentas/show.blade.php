@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/cuentas/show/' . $cuenta->id ) }}">
                <img src="/bancoCuenta.jpg" title="Cuenta" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$cuenta->id}}</h4>
            <h6>Interés: {{$cuenta->interes}}</h6>
            <h6>Tipo: {{$cuenta->tipo}}</h6>
            <h6>Saldo: {{$cuenta->saldo}}</h6>
            <p><strong>Estado: </strong>
                @if($cuenta->bloqueada)
                    Cuenta bloqueada.
                    @php
                    $class = "btn btn-danger";
                    $texto = "Desbloquear";
                    @endphp
                @else
                    Cuenta NO bloqueada.
                    @php
                        $class = "btn btn-success";
                        $texto = "Bloquear";
                    @endphp
                @endif
            </p>

            <form action="{{ url('cuentas/cambiaBloqueada/' . $cuenta->id) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <input type="submit"  class="{{$class}}" value="{{$texto}}" />
            </form>


            <a class="btn btn-warning" href="{{ url('/cuentas/edit/' . $cuenta->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar cuenta</a>
            <a class="btn btn-outline-info" href="{{ action('CuentasController@getIndex') }}">Volver al listado</a>

        </div>
    </div>


@stop

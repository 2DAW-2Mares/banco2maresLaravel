@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir Cuenta
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('cuentas/create') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <input type="number" min="0" max="1" step="0.01" title="Interés" pattern="^\d+(?:\.\d{1,2})?$" name="interes" placeholder="Interés">
                        </div>

                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number" min="0" max="12000" name="saldo" placeholder="Saldo">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir Cuenta
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop

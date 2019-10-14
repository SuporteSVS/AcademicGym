@extends('layouts.app')

    @section('content')


        @if (Auth::user()->Tipos == 'Gerente')
            <form name="relatPag" method="get" action="{{route('relatorios.show')}}">
                <div class="container" align="center">
                    <h3>Gerar Relatório de Inadimplencia:</h3>
                    <div class="row">
                        <div class="input-group">
                            <span id="widthFix" class="input-group-text col-sm-2">Início de vencimento:</span>
                            <input class="form-control mr-5" type="date" name="dataInicial">
                            <span id="widthFix" class="input-group-text col-sm-2">Final de vencimento:</span>              
                            <input class="form-control mr-5" type="date" name="dataFinal">
                            <button type="submit" class="col-sm-1 btn badge-pill btn-sm mr-1 btn-success">Confirma</button>
                            <button type="reset" class="col-sm-1 btn badge-pill btn-sm ml-1 btn-danger">Cancela</button>
                        </div>
                    </div>                
                </div>
            </form>
            @else
                <div align="center">
                    <div class="card">
                        <div class="card-header">
                            <h1>Erro!</h1>
                        </div>
                        <div class="card-body">
                            <p>Acesso negado!</p>
                        </div>
                    </div>
                </div>
        @endif
    @endsection

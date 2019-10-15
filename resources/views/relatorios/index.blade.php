@extends('layouts.app')

    @section('content')


        @if (Auth::user()->Tipos == 'Gerente')
            <form name="relatPag" method="get" action="{{route('relatorios.show')}}">
            @csrf
                <div class="container" align="center">
                    <h3>Gerar Relatório de Inadimplencia:</h3>
                    <div class="row">
                        <div class="input-group">
                            <span id="widthFix" class="input-group-text ml-3 col-sm-2">Início de vencimento:</span>
                            <input class="form-control mr-5" type="date" name="dataInicial">
                            <span id="widthFix" class="input-group-text col-sm-2">Final de vencimento:</span>              
                            <input class="form-control mr-5" type="date" name="dataFinal">
                            <button type="submit" class="col-sm-1 btn badge-pill  mr-1 btn-success">Confirma</button>
                            <a role="button" href="{{ url('/') }}" class="col-sm-1 btn badge-pill ml-1 mr-3 btn-danger">Cancela</a>
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

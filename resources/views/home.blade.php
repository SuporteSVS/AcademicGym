@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @guest
            <div align="center">
                 <div class="card">
                    <div class="card-header">
                        <h2>Guest:</h2>
                    </div>
                    <div class="card-body">
                        <p>Por favor, efetue o login para continuar.</p>
                    </div>
                </div>
            </div>

        @else

            @if (Auth::user()->Tipos == 'Recepcionista')

                <div align="center">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Alunos</h2>
                                </div>
                                <div class="card-body">
                                    <p>Acesso à página de Alunos.</p>
                                    <a class="btn btn-outline-dark text-light" role="button"id="Hcolor" href="{{ route('alunos.index') }}">Acessar!</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Instrutores</h2>
                                </div>
                                <div class="card-body">
                                    <p>Acesso à página de Instrutores.</p>
                                    <a class="btn btn-outline-dark text-light" role="button"id="Hcolor" href="{{ route('instrutores.index') }}">Acessar!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @elseif (Auth::user()->Tipos == 'Gerente')
                    <div class="container" align="center">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2 >Relatório de Inadimplencia</h2>
                                </div>
                                <div class="card-body">
                                    <p></p>
                                    <a class="btn btn-outline-dark" role="button"id="Hcolor" href="{{ route('relatorios.index') }}">Acessar!</a>
                                </div>
                            </div>
                        </div>
                    </div>

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

        @endguest

        </div>
    </div>
</div>

@endsection

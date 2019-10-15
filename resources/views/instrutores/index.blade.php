@extends('layouts.app')

@section('content')

    @if (Auth::user()->Tipos == 'Recepcionista')
        <div class="container" align="center">
            <h3>Instrutores</h3>
            <div class="col-md-10">
                <table class="table table-striped table-responsive-md table-bordered bordered-dark table-light">
                    <thead id="Hcolor">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">identidade</th>
                            <th scope="col">Tipo de Atividade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <!-- Dados de identificação -->
                    <tbody>
                        @foreach($instrutores as $instrutor)
                            <tr>
                                <th scope="row">{{ $instrutor->id_Instrutor}}</th>
                                <td>{{ $instrutor->Nome }}</td>
                                <td>{{ $instrutor->CPF }}</td>
                                <td>{{ $instrutor->Identidade }}</td>
                                <td>{{ $instrutor->tp_Aula }}</td>
                                <td>
                                    <div class="btn-group">
                                    <!-- Ações -->
                                        <a class="btn btn-primary border border-light text-white" role="button" href="{{ route('instrutores.edit', ['instrutores'=> $instrutor->id_Instrutor]) }}">Editar</a>


                                            <!-- Botão de gatilho para a modal -->
                                            <a class="btn btn-danger border border-light text-white" data-toggle="modal" data-target="#myModal">
                                            Apagar
                                            </a>
                                    </div>
                                            <!-- Modal -->
                                            <div class="modal" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-dark">Exclusão de Cadastro</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-body">Você tem certeza de que deseja apagar este cadastro?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a class="btn btn-primary" data-dismiss="modal">Não, sair!</a>
                                                            <a class="btn btn-secundary" href="{{ route('instrutores.destroy', ['instrutor' =>$instrutor->id_Instrutor]) }}"role="button">Sim, quero apagar!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Fim das Ações -->
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    <a class="btn btn-light border border-dark" id="Hcolor" href="{{ route('instrutores.create') }}" role="button">Adicionar</a>
            </div>
        </div>
        @else

            <div class="container" align="center">
                <div class="card">
                    <div class="card-header">
                        <h1 class="danger">Erro!</h1>
                    </div>
                    <div class="card-body">
                        <h3>403:</h3>
                        <p>Acesso não permitido!</p>
                    </div>
                </div>
            </div>

    @endif


@endsection

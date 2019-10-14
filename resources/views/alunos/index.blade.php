@extends('layouts.app')

@section('content')

    @if (Auth::user()->Tipos == 'Recepcionista')

        <div class="container" align="center">
            <h3>Alunos</h3>
            <div class="col-md-10">
                <table class="table table-striped table-responsive-md table-bordered bordered-dark table-light">
                    <thead id="Hcolor">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Número</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <!-- Dados de identificação -->
                    <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <th scope="row">{{ $aluno->Matricula }}</th>
                                <td>{{ $aluno->Nome }}</td>
                                <td>{{ $aluno->CPF }}</td>
                                <td>{{ $aluno->Rua }}</td>
                                <td>{{ $aluno->Numero }}</td>
                                <td>
                                    <div class="btn-group">
                                    <!-- Ações -->
                                        <a class="btn text-dark" role="button" href="{{ route('alunos.edit', ['alunos'=> $aluno->Matricula]) }}">Atualizar</a>


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
                                                            <a class="btn btn-secundary" href="{{ route('alunos.destroy', ['aluno' =>$aluno->Matricula]) }}"role="button">Sim, quero apagar!</a>
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
                    <a class="btn btn-light border border-dark text-light"id="Hcolor" href="{{ route('alunos.create') }}" role="button">Adicionar</a>
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

@extends('layouts.app')

@section('content')


    @if (Auth::user()->Tipos == 'Recepcionista')

    <div align="center">
        <h3 class="w-74" >Cadastro de Aluno</h3>
       
        <div class="container col-7  bg-light"  >
            <form action="{{ route('alunos.store') }}" class="form-horizontal" method="POST" >
                @csrf
                <div class="container">
                    <div align="center">
                        <form class="input-group" >
                            <div class=" input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix"  class="input-group-text">Nome:</span>
                                    <input type="text"  size="74" name="Nome">
                                </div>
                            </div>
                            <div class=" input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix"  class="input-group-text">Logradouro: </span>
                                    <input type="text"  size="74" name="Rua">
                                </div>
                            </div>
                            <div class=" input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">Número:</span>
                                    <input type="text" maxlength='5'  size="10" name="Numero">
                                </div>
                            </div>
                            <div class=" input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">Complemento:</span>
                                    <input type="text"  name="Complemento" size="74">
                                </div>
                            </div>
                            <div class=" input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">Bairro: </span>
                                    <input type="text"  size="74" name="Bairro">
                                </div>
                            </div>
                            <div class=" input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">Cidade: </span>
                                    <input type="text"  size="74" name="Cidade">
                                </div>
                            </div>

                            <div class="input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">CEP: </span>
                                    <input type="text" maxlength="9"  size="20" name="CEP"
                                    placeholder="00000-000">
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">UF: </span>
                                    <input type="text" maxlength="2"  size="2" name="UF">
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group">
                                    <span id="widthFix" class="input-group-text ">CPF: </span>
                                    <input type="text" size="20" maxlength="14"
                                      name="CPF" placeholder="000.000.000-00">
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group mb-4">
                                    <span id="widthFix" class="input-group-text ">Identidade: </span>
                                    <input type="text"  maxlength="12"  size="20" name="Identidade"
                                    placeholder="00.000.000/0">
                                </div>
                            </div>

                            </div>
                            <div class="row ">
                                    <div class="col-2 "></div>
                                <button type="submit"  class="col-3 btn badge-pill btn-sm border-dark btn-success">Cadastrar</button>
                                        <div class="col-2"></div>
                                <a class="col-3 btn badge-pill btn-danger btn-sm border border-dark"
                                    href="{{ route('alunos.index') }}" role="button">Cancelar</a>
                                    <div class="col-2"></div>                                
                            </div>
                        </form>
                    </div>
                </div>
            </form>
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

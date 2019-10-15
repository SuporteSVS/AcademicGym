@extends('layouts.app')

@section('content')

    @if (Auth::user()->Tipos == 'Recepcionista')

        <div align="center">
         <h3 class="w-74" >Edição de Instrutor</h3>
            <div class="container col-7  bg-light"  >
                <form action="{{ route('instrutores.update', ['instrutores'=>$instrutores->id_Instrutor]) }}" class="form-horizontal" method="POST" >

            @csrf

            @method('PUT')

                    <div class="container">
                        <div align="center">
                            <form class="input-group" >
                                <div class=" input-group mb-1">
                                    <div class="input-group">
                                        <span id="widthFix"  class="input-group-text">Nome:</span>
                                        <input value="{{ $instrutores->Nome }}" type="text"  size="74" name="Nome">
                                    </div>
                                </div>
                                <div class="input-group mb-1">
                                    <div class="input-group">
                                        <span id="widthFix" class="input-group-text ">CPF: </span>
                                        <input value="{{ $instrutores->CPF }}" type="text" size="20" maxlength="14" name="CPF">
                                    </div>
                                </div>
                                <div class="input-group mb-1">
                                    <div class="input-group ">
                                        <span id="widthFix" class="input-group-text ">Identidade: </span>
                                        <input value="{{ $instrutores->Identidade }}" type="text" maxlength="12"  size="20" name="Identidade">
                                    </div>
                                </div>
                                <div class=" input-group mb-4">
                                    <div class="input-group">
                                        <span id="widthFix"  class="input-group-text">Tipo de Aula: </span>
                                        <select value="{{ $instrutores->tp_Aula }}" name="tp_Aula">                                            
                                            <option >Musculação</option>
                                            <option >Combo</option>
                                            <option >Grupo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-2 "></div>
                                        <button type="submit"  class="col-3 btn badge-pill btn-sm border-dark btn-success">Confirmar</button>
                                            <div class="col-2"></div>
                                        <a class="col-3 btn badge-pill btn-danger btn-sm border border-dark"
                                        href="{{ route('instrutores.index') }}" role="button">Cancelar</a>
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

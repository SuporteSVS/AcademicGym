@extends('layouts.app')


    @section('content')
        @if (Auth::user()->Tipos == 'Gerente')
            <div class="container" align="center">
                <h3>Relatório de Inadimplencia:</h3>
                <div class="row">
                    <div class="input-group">
                        <span id="widthFix" class="input-group-text col-sm-2">Início de vencimento:</span>
                        <input id="dataIni" class="form-control mr-5" type="text" value="{{$dIni}}" disabled>
                        <span id="widthFix" class="input-group-text col-sm-2">Final de vencimento:</span>              
                        <input id="dataFin"  class="form-control mr-5" type="text" value="{{$dFin}}" disabled>
                        <button type="submit" class="col-sm-1 btn badge-pill mb-1 btn-sm ml-1 btn-danger">Cancela</button>
                    </div>
                </div>
                <div>
                    <table class="table table-striped table-responsive-md table-bordered bordered-dark table-light">
                        <thead id="Hcolor">
                            <tr>
                                <th scope="col">Matricula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <!-- Dados de identificação -->
                        <tbody>
                            @foreach($pagamentos as $pagamento)
                                <tr>
                                    <td>{{ $pagamento->aluno_Matricula }}</td>
                                    <td>{{ $pagamento->Nome }}</td>
                                    <td><? date_format( ?>{{ $pagamento->DataVenc }} <?, "d-m-Y")?></td>
                                    <td>{{ $pagamento->Valor }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    @endsection
@extends('layouts.app')


    @section('content')
        @if (Auth::user()->Tipos == 'Gerente')
            <div class="container" align="center">
            
                <h3>Relatório de Inadimplencia:</h3>
                <div class="row">
                    <div class="input-group">
                        <span id="widthFix" class="input-group-text mb-1 ml-3 col-sm-2">Início de vencimento:</span>
                        <input id="dataIni" class="form-control mr-5" type="text" value="{{$dIni}}" disabled>
                        <span id="widthFix" class="input-group-text mb-1 col-sm-2">Final de vencimento:</span>              
                        <input id="dataFin"  class="form-control  mr-5" type="text" value="{{$dFin}}" disabled>
                        <a role="button" href="{{ route('relatorios.index') }}" class="col-sm-1 btn badge-pill mb-1 mr-3 btn-danger">Cancelar</a>
                        </div>
                </div>
                <div>
                    <table class="table table-striped table-responsive-md mt-1 table-bordered bordered-dark table-light">
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
                            <?php $n_total = 0?>
                            @foreach($pagamentos as $pagamento)
                                <tr>

                                    <?php $data_formatada = date_format(date_create($pagamento->DataVenc),"d/m/Y") ?>

                                    <td>{{ $pagamento->aluno_Matricula }}</td>
                                    <td>{{ $pagamento->Nome }}</td>
                                    <td>{{ $data_formatada}}  </td>
                                    <td>{{ $pagamento->Valor }}</td>
                                    <?php $n_total = $n_total +  $pagamento->Valor ?>

                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total : </td>
                                <td>{{ $n_total }}</td>
                            </tr>
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
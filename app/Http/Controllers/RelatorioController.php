<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;


class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagamentos = Pagamento::all();
       return view('relatorios.index')->with(['pagamentos' => $pagamentos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $dIni=date_format(date_create($_GET["dataInicial"]),"d/m/Y");
        $dFin=date_format(date_create($_GET["dataFinal"]),"d/m/Y");

//        $pagamento = Pagamento::whereBetween('dataVenc', [date_create($_GET["dataInicial"]), date_create($_GET["dataFinal"])])->get();
        $pagamento = Pagamento::join('alunos', 'alunos.matricula', '=', 'pagamentos.aluno_matricula')
        ->whereBetween('dataVenc', [date_create($_GET["dataInicial"]), date_create($_GET["dataFinal"])])
        ->get();

//        ->join('alunos', 'alunos.matricula', '=', 'pagamento.aluno_matricula')

        return view('relatorios.show', [
        'dIni' => $dIni, 
        'dFin' => $dFin, 
        'pagamentos' => $pagamento
        ]);
    }

        public function __construct()
    {
        $this->middleware('auth');
    }
    public function grelat(request $request) {
        $dataIni = $request->input('dataIni');
        $dataEnd = $request->input('dataEnd');        
    }

}

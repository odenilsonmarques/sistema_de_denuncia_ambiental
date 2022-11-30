<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_anonymou;
use App\Http\Requests\StoreDenunciationAnonymousFromRequest;

class DenunciationAnonymouController extends Controller
{
     //definindo a quantidade de itens por pagination
     private $totalPage = 5;

     //exibe página de cadastro de denúncia anônima
     public function add()
     {
         return view('complaint_anonymou.add');
     }
     public function create(StoreDenunciationAnonymousFromRequest $request)
     {
         $data = $request->all();
         if($request->annex_one)
         {
             $data['annex_one'] = $request->annex_one->store('/img');
         }
         if($request->annex_two)
         {
             $data['annex_two'] = $request->annex_two->store('/img');
         }
         if($request->annex_three)
         {
             $data['annex_three'] = $request->annex_three->store('/img');
         }
         Denunciation_anonymou::create($data);
 
         return redirect()->route('complaint.message.msg');
     }
     //exibe lista de  denúncias anônimas
     public function list(Denunciation_anonymou $denunciationAnonymou)//passando o objeto, mas poderia ser de outra forma. Usando esse recurso pq vou precisar filtar 
     {
         $denunciationAnonymous = Denunciation_anonymou::orderBy('created_at','desc')->paginate($this->totalPage);
         // dd($listAnonymous);
         return view('complaint_anonymou.list',compact('denunciationAnonymous'));
     }
 
     //exibe form de edição da denuncia
     public function edit($id)
     {
         // chamo esse array para capturar o campo escolhido através da logica implementada no form de edição. Poderia ser apenas uma select com options declarados no form de edicão, mas esse recurso me permite capturar o campo option selecionado optei por usa-lo, porem deve ter outras formas, essa forma serve para formularios de cadastros... 
         $typeStatus = ['Em Análise', 'Deferida', 'Indeferida'];
         $data = Denunciation_anonymou::find($id);
         if($data){
             return view('complaint_anonymou.edit',compact('data','typeStatus'));
         }else{
             return redirect()->back();
         }
     }
     public function editAction(Request $request, $id)
     {
         $data = Denunciation_anonymou::find($id);
         if($data){
             $denunciation = $request->only('received', 'description_status');
             $data -> update($denunciation);
             return redirect()->route('complaint.anonymou.details',$id)
             // return view('denunciation.details',['data' => $data]);
             ->with('messageEd', 'Statud alterado com sucesso!');
         }else{
             return redirect()->back();
         }
     }
}

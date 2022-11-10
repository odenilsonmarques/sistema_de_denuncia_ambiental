<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Denunciation_with_identification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DenunciationIdentificationController extends Controller
{
     //definindo a quantidade de itens por pagination
     private $totalPage = 5;
    
     //exibe página de cadastro de denúncia anônima
     public function add()
     {
        return view('denunciationIdentification.add');
     }
     public function create(Request $request)
     {
        // usando essa forma de salvar, pois vou precisar pegar o id do usuario 
        $user = Auth::id();
        $denunciation = new Denunciation_with_identification;
        $denunciation->category = $request->category;
        $denunciation->distric = $request->distric;
        $denunciation->road = $request->road;
        $denunciation->number = $request->number;
        $denunciation->reference_point = $request->reference_point;
        $denunciation->violator = $request->violator;
        $denunciation->annex_one = $request->annex_one;
        $denunciation->annex_two = $request->annex_two;
        $denunciation->annex_three = $request->annex_three;
        $denunciation->description = $request->description;
        $denunciation->received = $request->received;
        $denunciation->description_status = $request->description_status;
        $denunciation->user_id = $user;

        $data = $request->all();

         if($request->annex_one)
         {
             $denunciation['annex_one'] = $request->annex_one->store('/img');
         }
         if($request->annex_two)
         {
             $denunciation['annex_two'] = $request->annex_two->store('/img');
         }
         if($request->annex_three)
         {
             $denunciation['annex_three'] = $request->annex_three->store('/img');
         }
        $denunciation->save($data);
        return redirect()->route('dashboard.dash');

       
     }

















     public function list(Denunciation_with_identification $denunciationIdentification)
     {
         $denunciationIdentifications = Denunciation_with_identification::paginate($this->totalPage);
         // dd($denunciationIdentifications);
         return view('denunciationIdentification.list',compact('denunciationIdentifications'));
     }

     public function edit($id)
     {
        // chamo esse array para capturar o campo escolhido através da logica implementada no form de edição. Poderia ser apenas uma select com options declarados no form de edicão, mas esse recurso me permite capturar o campo option selecionado optei por usa-lo, porem deve ter outras formas, essa forma serve para formularios de cadastros... 
        $typeStatus = ['Em Análise', 'Deferida', 'Indeferida'];
        $data = Denunciation_with_identification::find($id);
        if($data){
            return view('denunciationIdentification.edit',compact('data','typeStatus'));
        }else{
            return redirect()->back();
        }
     }

     public function editAction(Request $request, $id)
     {
        $data = Denunciation_with_identification::find($id);
        if($data){
            $denunciationIdentification = $request->only('received', 'description_status');
            $data -> update($denunciationIdentification);
            return redirect()->route('complaint.identification.detailsIdentification',$id)
            ->with('messageEd', 'Statud alterado com sucesso!');
        }
     }
}

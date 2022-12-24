<link rel="stylesheet" href="{{'assets/css/stylePdf.css'}}">
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Sistema de Denúncia Ambiental</h1><hr>
            <h2 class="letf">Dados da denúncia</h2>
            <p><strong>Número de identificação:</strong> {{$listPdfByComplaits->id}}  <strong>Data de lacamento:</strong> {{date('d/m/Y',strtotime($listPdfByComplaits->created_at))}} <strong>Atualizado em:</strong> {{date('d/m/Y',strtotime($listPdfByComplaits->updated_at))}}</p>
            <p><strong>Categoria:</strong> {{$listPdfByComplaits->category}}</p>
            <p><strong>Bairro:</strong> {{$listPdfByComplaits->distric}}</p>
            <p><strong>Rua:</strong> {{$listPdfByComplaits->road}}  <strong>Nº</strong> {{$listPdfByComplaits->number}}</p>
            <p><strong>Ponto de referência:</strong> {{$listPdfByComplaits->reference_point}}</p>
            <p><strong>Descrição:</strong> {{$listPdfByComplaits->description}}</p>
            <p><strong>Provavel infrator:</strong> {{$listPdfByComplaits->violator}}</p>
            <p><strong>Status:</strong> {{$listPdfByComplaits->received}}</p>
            <p><strong>Motivo:</strong> {{$listPdfByComplaits->description_status}}</p>

            
            

            {{-- <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Nº</th>
                        <th>Ponto de Referência</th>
                        <th>Provável Infrator</th>
                        <th>Data</th>
                        <th>Status</th>
                    </tr>
                </thead>
                @foreach ($listPdfByComplaits as $listPdfByComplait)
                    <tr>
                        <td>{{$listPdfByComplait->id}}</td>
                        <td>{{$listPdfByComplait->category}}</td>
                        <td>{{$listDenunciationIdentification->road}}</td>
                        <td>{{$listDenunciationIdentification->distric}}</td>
                        <td>{{$listDenunciationIdentification->number}}</td>
                        <td>{{$listDenunciationIdentification->reference_point}}</td>
                        <td>{{$listDenunciationIdentification->violator}}</td>
                        <td>{{date('d/m/Y',strtotime($listDenunciationIdentification->created_at))}}</td>
                        <td>{{$listDenunciationIdentification->received}}</td>
                    </tr>
                @endforeach
            </table> --}}
        </div> 
    </div>
</div>


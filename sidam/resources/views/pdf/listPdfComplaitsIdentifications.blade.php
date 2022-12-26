<link rel="stylesheet" href="{{'assets/css/stylePdf.css'}}">
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Denúcias com indentificação</h1>
            <table class="table table-striped table-hover text-center">
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
                @foreach ($listDenunciationIdentifications as $listDenunciationIdentification)
                    <tr>
                        <td>{{$listDenunciationIdentification->id}}</td>
                        <td>{{$listDenunciationIdentification->category}}</td>
                        <td>{{$listDenunciationIdentification->road}}</td>
                        <td>{{$listDenunciationIdentification->distric}}</td>
                        <td>{{$listDenunciationIdentification->number}}</td>
                        <td>{{$listDenunciationIdentification->reference_point}}</td>
                        <td>{{$listDenunciationIdentification->violator}}</td>
                        <td>{{date('d/m/Y',strtotime($listDenunciationIdentification->created_at))}}</td>
                        <td>{{$listDenunciationIdentification->received}}</td>
                    </tr>
                @endforeach
            </table>
        </div> 
    </div>
</div>


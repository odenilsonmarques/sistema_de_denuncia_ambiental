
<link rel="stylesheet" href="{{'assets/css/stylePdf.css'}}">
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Denúcias Anônimas</h1>
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
                @foreach ($listDenunciations as $listDenunciation)
                    <tr>
                        <td>{{$listDenunciation->id}}</td>
                        <td>{{$listDenunciation->category}}</td>
                        <td>{{$listDenunciation->road}}</td>
                        <td>{{$listDenunciation->distric}}</td>
                        <td>{{$listDenunciation->number}}</td>
                        <td>{{$listDenunciation->reference_point}}</td>
                        <td>{{$listDenunciation->violator}}</td>
                        <td>{{date('d/m/Y',strtotime($listDenunciation->created_at))}}</td>
                        <td>{{$listDenunciation->received}}</td>
                    </tr>
                @endforeach
            </table>
        </div> 
    </div>
</div>



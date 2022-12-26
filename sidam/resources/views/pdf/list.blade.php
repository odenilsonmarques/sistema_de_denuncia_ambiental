<link rel="stylesheet" href="{{'assets/css/stylePdf.css'}}">
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Detalhes da Denúncia</h1><hr>

            <h2 class="letf">Dados do denunciante</h2>
            <p><strong>Nome:</strong> {{$listPdfByComplaits->user->name}}</p>

            <h2 class="letf">Dados da denúncia</h2>
            <p><strong>Número de identificação:</strong> {{$listPdfByComplaits->id}}  <strong>Data de lancamento:</strong> {{date('d/m/Y',strtotime($listPdfByComplaits->created_at))}} <strong>Atualizado em:</strong> {{date('d/m/Y',strtotime($listPdfByComplaits->updated_at))}}</p>
            <p><strong>Categoria:</strong> {{$listPdfByComplaits->category}}</p>
            <p><strong>Bairro:</strong> {{$listPdfByComplaits->distric}}</p>
            <p><strong>Rua:</strong> {{$listPdfByComplaits->road}}  <strong>Nº</strong> {{$listPdfByComplaits->number}}</p>
            <p><strong>Ponto de referência:</strong> {{$listPdfByComplaits->reference_point}}</p>
            <p><strong>Descrição:</strong> {{$listPdfByComplaits->description}}</p>
            <p><strong>Status:</strong> {{$listPdfByComplaits->received}}</p>
            <p><strong>Motivo:</strong> {{$listPdfByComplaits->description_status}}</p>

            <h2 class="letf">Dados do infrator</h2>
            <p><strong>Nome:</strong> {{$listPdfByComplaits->violator}}</p>
        </div> 
    </div>
</div>


@extends('layouts.template')
@section('title','Denuncias com identificação')

@section('content')
    <div class="container">
        @if(Auth::user()->is_admin != 1)
            <div class="row">
                <div class="col-lg-8 mt-5">
                    <div class="input-group">
                        <form action="{{route('search.filterDenunciation')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="input-group mb-3">
                                <select name="category" id="category" class="form-select  inputSearch">
                                    <option value="">--- Selecione a categoria---</option>
                                    <option value="Agua">Agua</option>
                                    <option value="Ar">Ar</option>
                                    <option value="Fauna">Fauna</option>
                                    <option value="Fogo">Fogo</option>
                                    <option value="Ruido">Ruido</option>
                                    <option value="Solo">Solo</option>
                                    <option value="Vegetacao">Vegetacao</option>
                                </select>
                                <select name="received" id="received" class="form-select  inputSearch">
                                    <option value="">--- Selecione o status---</option>
                                    <option value="Recebida">Recebida</option>
                                    <option value="Em Análise">Em Análise</option>
                                    <option value="Deferida">Deferida</option>
                                    <option value="Indeferida">Indeferida</option>
                                </select>
                                <input type="text" name="distric" class="form-control inputSearch" placeholder="Bairro">
                                <div class="input-group-append ml-3">
                                <button type="submit" class="btn btn-outline-secondary" style="background-color:#6c63ff;color:#fff" >Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center mt-2">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Categoria</th>
                                    <th>Data</th>
                                    <th>Status</th>
                                    <th>Motivo</th>
                                    <th>Atualizado em</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($denunciations as $denunciationUser)
                                    <tr>
                                        <td>{{ $denunciationUser->id}}</td>
                                        <td>{{ $denunciationUser->category}}</td>
                                        <td>{{date('d/m/Y',strtotime($denunciationUser->created_at))}}</td>
                                        <td>{{ $denunciationUser->received}}</td>
                                        @if($denunciationUser->description_status)
                                            <td>{{ $denunciationUser->description_status}}</td>
                                        @else
                                            <td>aguardando para análise ...</td>
                                        @endif
                                        <td>{{date('d/m/Y',strtotime($denunciationUser->updated_at))}}</td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="justify-content-center pagination">
                            @if(isset($dataForm))
                                {{$denunciations->appends($dataForm)->links('pagination::bootstrap-4')}}
                            @else
                                {{$denunciations->links('pagination::bootstrap-4')}}
                            @endif
                        </div>
                    </div>
                </div> 
            </div>
        @endif
    </div>
@endsection
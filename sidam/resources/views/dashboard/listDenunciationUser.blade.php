@extends('layouts.template')
@section('title','Denuncias com identificação')

@section('content')
    <div class="container">
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
                                <th>Bairro</th>
                                <th>Rua</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th>Foto</th>
                                <th>Detalhes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($denunciations as $denunciationUser)
                                <tr>
                                    <td>{{ $denunciationUser->id}}</td>
                                    <td>{{ $denunciationUser->category}}</td>
                                    <td>{{ $denunciationUser->distric}}</td>
                                    <td>{{ $denunciationUser->road}}</td>
                                    <td>{{date('d/m/Y',strtotime($denunciationUser->created_at))}}</td>
                                    <td>{{ $denunciationUser->received}}</td>
                                    <td><img src="{{asset('storage/'. $denunciationUser->annex_one)}}" alt="produto" width="60" height="60" ></td>
                                    <td>
                                        <a href="{{route('denunciation.detailsIdentification',$denunciationUser->id)}}" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </a>
                                    </td>
                                    <td >
                                        <a href="{{route('denunciation.detailsIdentification',$denunciationUser->id)}}" class="btn btn-primary btn-sm" data-bs-toggle="modal"  data-bs-target="#exampleModal">Modal</a>
                                    </td>
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

       

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-3">
                        <ul class="">
                            <li class="list-group-item list-group-item-dark" aria-current="true">Categoria</li>
                            <li  class="list-group-item">{{$data->id}}</li>
                            
                        </ul>
                    </div>
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        





    </div>
@endsection
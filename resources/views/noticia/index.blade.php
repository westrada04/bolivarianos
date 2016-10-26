@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="NoticiasController as vm">
        <div class="row">
            <div class="col-md-12 ">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Resumen</th>
                            <th>Contenido</th>
                            <th >Imagen</th>
                            <th>Usuario</th>
                            <th class="col-md-3">Comentarios </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($noticias as $noticia)
                            <tr>
                                <td> {{ $noticia->id  }}  </td>
                                <td> {{ $noticia->titulo }} </td>
                                <td> {{ $noticia->resumen }} </td>
                                <td> {{ $noticia->contenido }} </td>
                                <td> <img src=" {{ $noticia->imagen }}" class="img-circle" style="width: 100px;height: 100px;">  </td>
                                <td> {{ $noticia->user->name  }} </td>
                                <td>
                                    @foreach ($noticia->comentarios as $comentario)
                                        {{ $comentario->descripcion }}
                                        <br>
                                        por: {{ $comentario->user->name  }}
                                        <br>

                                    @endforeach
                                        @if (!Auth::guest())
                                            <a  ng-click="vm.noticia({{ $noticia->id  }})" data-toggle="modal" data-target="#myModal" > Comentar</a>
                                        @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $noticias->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Comentar
                        </h4>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label" for="comentar">Comentar </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="vm.comentario"  placeholder="Comentar"/>
                                </div>
                            </div>


                        </form>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="button" ng-click="vm.comentar()" class="btn btn-primary">
                            Comentar
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
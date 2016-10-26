@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear nueva Noticia</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/noticia') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-6">
                                    <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">

                                    @if ($errors->has('titulo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('resumen') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Resumen</label>

                                <div class="col-md-6">
                                    <input id="resumen" type="text" class="form-control" name="resumen" value="{{ old('resumen') }}">

                                    @if ($errors->has('resumen'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('resumen') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('contenido') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">contenido</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" name="contenido" ></textarea>

                                    @if ($errors->has('contenido'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contenido') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                                <label for="imagen" class="col-md-4 control-label">Url Imagen</label>

                                <div class="col-md-6">
                                    <input id="url" type="url" class="form-control" name="imagen" value="{{ old('imagen') }}">

                                    @if ($errors->has('imagen'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> crear
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

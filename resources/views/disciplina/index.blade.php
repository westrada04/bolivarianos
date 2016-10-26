@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Disciplina</th>
                            <th>Imagen</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($disciplinas as $disciplina)
                            <tr>
                                <td> {{ $disciplina->id  }}  </td>
                                <td> {{ $disciplina->nombre }} </td>
                                <td> <img src=" {{ asset('imagenes/disciplinas/'.$disciplina->imgdisciplina) }}"  class="img-circle">  </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $disciplinas->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
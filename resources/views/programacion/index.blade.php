@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Competencia</th>
                            <th>Disciplina</th>
                            <th>Categoria</th>
                            <th>Estado de la Competencia</th>
                            <th>Sede</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($competencias as $competencia)
                            <tr>
                                <td> {{ $competencia->id  }} </td>
                                <td> {{ $competencia->nombre  }}  </td>
                                <td> {{ $competencia->categoria->disciplina->nombre }} </td>
                                <td> {{ $competencia->categoria->nombre  }} </td>
                                <td> {{ $competencia->estadocompetencia->nombre  }}</td>
                                <td> {{ $competencia->sede->nombre }} </td>
                                <td> {{ $competencia->fecha }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $competencias->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
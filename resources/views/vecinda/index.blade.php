@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Listado de vecinda</h3>
                    </div>
                    <div class="card-body">
                        <h3><a href="{{ route('vecinda.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Nuevo</a></h3>
                        <br>
                        <br>
                        @include('vecinda.fragment.info')
                        <table class="table table-hover table-bordered table-striped">
                            <thead class="table-primary">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Apodo</th>
                                    <th colspan="3">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($Residents->count())
                                @foreach ($Residents as $Resident)
                                <tr class="text-center">
                                    <th scope="row">{{ $Resident->id }}</th>
                                    <td><img width="100px" height="100px" src="{{ Storage::url($Resident ->image) }}" alt="imagenes"></td>
                                    <td style="text-transform: capitalize">{{ $Resident->name }}</td>
                                    <td style="text-transform: capitalize">{{ $Resident->nickname }}</td>
                                    <td>
                                        <a href="{{ route('vecinda.show', $Resident->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('vecinda.edit', $Resident->id) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('vecinda.destroy', $Resident->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                               @endif
                            </tbody>
                        </table>
                        {{ $Residents->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
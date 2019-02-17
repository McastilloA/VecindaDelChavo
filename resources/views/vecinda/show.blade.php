@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Caracteristicas</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="card">
                                <img src="{{ Storage::url($Residents ->image) }}"  class="img-fluid" alt="imagenes">
                                <div class="card-body">
                                <strong><h1 class="card-title text-center" style="text-transform: capitalize">{{ $Residents->name }}</h1></strong>
                                    <div class="form-row">
                                        <strong><h2>Apodo : </h2></strong>
                                        <br><h3 style="text-transform: capitalize">{{ $Residents->nickname }}</h3>
                                    </div>
                                    <div class="form-row">
                                        <strong><h2>Departamento : </h2></strong>
                                        <h3 style="text-transform: capitalize">{{ $Residents->apartament }}</h3>
                                    </div>
                                    <div class="form-row">
                                        <strong><h3>Descripcion del personaje : </h3></strong>
                                        <h3 style="text-transform: capitalize">{{ $Residents->description }}</h3>
                                    </div>
                                    <a href="{{ route('vecinda.edit', $Residents->id) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Modificar</a>
                                    <a href="{{ route ('vecinda.index') }}" class="btn btn-danger"><i class="fas fa-times-circle"></i> Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
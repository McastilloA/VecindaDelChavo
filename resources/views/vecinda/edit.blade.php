@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('vecinda.fragment.info')
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Crear Residente</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vecinda.update', $Residents->id) }}" enctype="multipart/form-data" method="POST" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">* Titulo</label>
                                    <select class="form-control" id="title" name="title" value>
                                        <option value="">Seleccionar...</option>
                                        <option value="Doña">Doña</option>
                                        <option value="Don">Don</option>
                                        <option value="Señor">Señor</option>
                                        <option value="Señora">Señora</option>
                                        <option value="Niño">Niño</option>
                                        <option value="Niña">Niña</option>
                                    </select>
                                    {{-- <input type="text" class="form-control" id="title" name="title" value="{{ $Residents->title }}" required> --}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">* Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $Residents->name }}" required style="text-transform: capitalize">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">* Imagen</label>
                                <img width="100px" height="100px" src="{{ Storage::url($Residents ->image) }}" alt="imagenes">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nickname">* Apodo</label>
                                    <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $Residents->nickname }}" required style="text-transform: capitalize">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="apartament">Departamento</label>
                                    <input type="text" class="form-control" id="apartament" name="apartament" value="{{ $Residents->apartament }}" style="text-transform: capitalize">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">* Descripcion</label>
                                <textarea class="form-control" id="description" name="description" required style="text-transform: capitalize">{{ $Residents->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                            <a href="{{ route ('vecinda.index') }}" class="btn btn-danger"><i class="fas fa-times-circle"></i> Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
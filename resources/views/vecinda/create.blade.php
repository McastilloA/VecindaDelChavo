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
                        <form action="{{ route('vecinda.store') }}" enctype="multipart/form-data" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="title">* Titulo</label>
                                    <select class="form-control" id="title" name="title">
                                        <option value="">Seleccionar...</option>
                                        <option value="Doña">Doña</option>
                                        <option value="Don">Don</option>
                                        <option value="Señor">Señor</option>
                                        <option value="Señora">Señora</option>
                                        <option value="Niño">Niño</option>
                                        <option value="Niña">Niña</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">* Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar nombre" style="text-transform: capitalize">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">* Imagen</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nickname">* Apodo</label>
                                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Ingresar Apodo" style="text-transform: capitalize">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="apartament">Departamento</label>
                                    <input type="text" class="form-control" id="apartament" name="apartament" placeholder="Ingresar departamento" style="text-transform: capitalize">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">* Descripcion</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Ingresar descripcion" style="text-transform: capitalize"></textarea>
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
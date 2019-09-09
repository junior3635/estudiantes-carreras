@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Carreras</div>
                <div class="card-body">
				      <form action="/carreras/update/{{$carrera->id}}" method="POST" >
				      	@csrf
					      <div class="modal-body">
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-4">
				        				<label for="nombre">Nombre</label>
				        				<input type="text" class="form-control" name="nombre" value="{{$carrera->nombre}}" required>
				        			</div>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="descripcion">Descripcion</label>
				        				<textarea class="form-control" name="descripcion_larga" required>{{$carrera->descripcion_larga}}</textarea>
				        			</div>
				        		</div>
				        		
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="descripcion">Descripcion</label>
				        				<select name="estatu" id="" class="form-control" required>
				        					@foreach($estatus as $estatu)

				        						<option value="{{$estatu->id}}">
                                                    {{$estatu->nombre}}
                                                </option>
				        					@endforeach
				        				</select>
				        			</div>
				        		</div>
				        		
				        	</div>
                                <a class="btn btn-danger" href="{{ url()->previous() }}">Atras</a>
                                <input type="submit" name="Editar" value="Editar" class="btn btn-primary">
					      </div>
                            
				      </form>
				    </div>

				  </div>
				</div>
                

                
            </div>
        </div>
    </div>
</div>

@endsection









<!-- Modal -->
<div id="myModalUpdate" class="modal fade" role="dialogEdit">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nuevo Estudiante</h4>
      </div>
      <form action="/carreras" method="POST" >
      	@csrf
	      <div class="modal-body">
        	<div class="form-group">
        		<div class="row">
        			<div class="col-md-4">
        				<label for="nombre">Nombre</label>
        				<input type="text" class="form-control" name="nombre"  value="{{$carrera->nombre}}">
        			</div>
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="row">
        			<div class="col-md-6">
        				<label for="descripcion">Descripcion</label>
        				<textarea class="form-control" name="descripcion_larga"></textarea>
        			</div>
        		</div>
        		
        	</div>
        	<div class="form-group">
        		<div class="row">
        			<div class="col-md-6">
        				<label for="descripcion">Descripcion</label>
        				<select name="estatus" id="" class="form-control">
        					<option value="0">Activo</option>
        				</select>
        			</div>
        		</div>
        		
        	</div>

	      </div>
	      <div class="modal-footer">
	        <input type="submit" name="crear" class="btn btn-primary">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      </div>
      </form>
    </div>

  </div>
</div>
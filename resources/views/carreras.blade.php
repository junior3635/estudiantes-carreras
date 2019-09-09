@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Carreras</div>
                <div class="card-body">
                	<div class="row">
                	<div class="col-md-6">
                		<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Nuevo</button>
                	</div>
                	<hr>
                </div>
                <table class="table table-bordered">
                	<thead>
                		<th>ID</th>
                		<th>Nombre</th>
                		<th>Descripcion</th>
                		<th>Estatus</th>
                		<th>Opciones</th>
                	</thead>
                	<tbody>
                		@foreach($carreras as $carrera)
                		<tr>
                			<td>{{$carrera->id}}</td>
                			<td>{{$carrera->nombre}}</td>
                			<td>{{$carrera->descripcion_larga}}</td>

                			<td>{{$carrera->estatus->nombre}}</td>

                			<td>

                				<a href="{{action('CarrerasController@edit', $carrera->id)}}" class="btn btn-sm btn-info" >Editar</a>
                				<button class="btn btn-sm btn-danger">Eliminar</button></td>
                		</tr>
                		@endforeach
                	</tbody>
                </table>
                </div>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialogEdit">
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
				        				<input type="text" class="form-control" name="nombre" required="">
				        			</div>
				        		</div>
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="descripcion">Descripcion</label>
				        				<textarea class="form-control" name="descripcion_larga" required=""></textarea>
				        			</div>
				        		</div>
				        		
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="descripcion">Descripcion</label>
				        				<select name="estatu" id="" class="form-control" required="">
				        					@foreach($estatus as $estatu)
				        					<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
				        					@endforeach
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
                

                
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estudiantes</div>
                <div class="card-body">
                	@include('layouts.message')
                	<div class="row">
                	<div class="col-md-6">
                		<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Nuevo</button>
                	</div>
                	<hr>
                </div>
                <table class="table table-bordered">
                	<thead>
                		<th>ID</th>
                		<th>Nombres</th>
                		<th>Apellido</th>
                		<th>Carrera</th>
                		<th>Estatus</th>
                		<th>Opciones</th>
                	</thead>
                	<tbody>
                		@foreach($estudiantes as $estudiante)
                		<tr>
                			<td>{{$estudiante->id}}</td>
                			<td>{{$estudiante->nombre}}</td>
                			<td>{{$estudiante->apellidos}}</td>
                			<td>{{$estudiante->carreras->nombre}}</td>
                			<td>{{$estudiante->estatus->nombre}}</td>
                			<td><a href="{{action('EstudiantesController@edit', $estudiante->id)}}" class="btn btn-sm btn-info" >Editar</a>
                				<a class="btn btn-sm btn-danger" href="/estudiantes/destroy/{{ $estudiante->id }}">Eliminar</a></td></td>
                		</tr>
                		@endforeach
                	</tbody>
                </table>
                </div>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog modal-lg">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <h4 class="modal-title">Nuevo Estudiante</h4>
				      </div>
				      <form action="/estudiantes" method="POST" >
				      	@csrf
					      <div class="modal-body">
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-4">
				        				<label for="nombre">Nombre</label>
				        				<input type="text" class="form-control" name="nombre" required="">
				        			</div>
				        			<div class="col-md-4">
				        				<label for="apellidos">Apellidos</label>
				        				<input type="text" class="form-control" name="apellidos" required="">
				        			</div>
				        			<div class="col-md-4">
				        				<label for="apellidos">Sexo</label>
						        		<select name="sexo" class="form-control" id="" required="">
						        			<option value=""></option>
						        			@foreach($sexos as $sexo)
						        			<option value="{{$sexo->id}}">{{$sexo->nombre}}</option>
						        			@endforeach
						        		</select>
				        			</div>
				        		</div>
				        		
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="apellidos">Fecha de Nacimiento</label>
				        				<input type="date" name="fecha_nac" class="form-control">
				        			</div>
				        		</div>
				        		
				        	</div>
				        	<div class="form-group">
				        		<label for="email">Email</label>
				        		<input type="email" class="form-control" name="email" required>
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="pais">Pais</label>
										<select name="pais" class="form-control" id="">
											<option value=""></option>
											@foreach($paises as $pais)
											<option value="{{$pais->id}}">{{$pais->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        			<div class="col-md-6">
				        				<label for="estado">Estado</label>
										<select name="estado" class="form-control" id="">
											<option value=""></option>
											@foreach($estados as $estado)
											<option value="{{$estado->id}}">{{$estado->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        			<div class="col-md-6">
				        				<label for="ciudad">Ciudad</label>
										<select name="ciudad" class="form-control" id="">
											<option value=""></option>
											@foreach($ciudades as $ciudad)
											<option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        		</div>
				        		
				        	</div>

				        	<div class="form-group">
				        		<label for="carrera">carrera</label>
								<select name="carrera" class="form-control" id="">
								<option value=""></option>
								@foreach($carreras as $carrera)
								<option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
								@endforeach
								</select>
				        	</div>
							<div class="form-group">
				        		<label for="estatus">Estatus</label>
								<select name="estatu" class="form-control" id="">
								<option value=""></option>
								@foreach($estatus as $estatu)
								<option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
								@endforeach
								</select>
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

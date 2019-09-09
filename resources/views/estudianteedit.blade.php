@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estudiantes</div>
                @include('layouts.message')
                <form action="/estudiantes/update/{{$estudiante->id}}" method="POST" >
				      	@csrf
					      <div class="modal-body">
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-4">
				        				<label for="nombre">Nombre</label>
				        				<input type="text" class="form-control" name="nombre" value="{{$estudiante->nombre}}" required="">
				        			</div>
				        			<div class="col-md-4">
				        				<label for="apellidos">Apellidos</label>
				        				<input type="text" class="form-control" name="apellidos" value="{{$estudiante->apellidos}}" required="">
				        			</div>
				        			<div class="col-md-4">
				        				<label for="apellidos">Sexo</label>
						        		<select name="sexo" class="form-control" id="" required="">
											@foreach($sexos as $sexo)
											<option value="{{$sexo->id}}"
											@if($sexo->id === $estudiante->sexo)
												selected
											@endif>{{$sexo->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        		</div>
				        		
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="apellidos">Fecha de Nacimiento</label>
				        				<input type="date" name="fecha_nac" class="form-control" value="{{$estudiante->fecha_nac}}" required="">
				        			</div>
				        		</div>
				        		
				        	</div>
				        	<div class="form-group">
				        		<label for="email">Email</label>
				        		<input type="email" class="form-control" name="email" value="{{$estudiante->email}}" required>
				        	</div>
				        	<div class="form-group">
				        		<div class="row">
				        			<div class="col-md-6">
				        				<label for="pais">Pais</label>
										<select name="pais" class="form-control" id="" required="">
											@foreach($paises as $pais)
											<option value="{{$pais->id}}"
											@if($pais->id === $estudiante->pais)
												selected
											@endif>{{$pais->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        			<div class="col-md-6">
				        				<label for="estado">Estado</label>
										<select name="estado" class="form-control" id="" required="">
											@foreach($estados as $estado)
											<option value="{{$estado->id}}"
											@if($estado->id === $estudiante->estado)
												selected
											@endif>{{$estado->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        			<div class="col-md-6">
				        				<label for="ciudad">Ciudad</label>
										<select name="ciudad" class="form-control" id="" required="">
											@foreach($ciudades as $ciudad)
											<option value="{{$ciudad->id}}"
											@if($ciudad->id === $estudiante->ciudad)
												selected
											@endif
											>{{$ciudad->nombre}}</option>
											@endforeach
										</select>
				        			</div>
				        		</div>
				        		
				        	</div>

				        	<div class="form-group">
				        		<label for="carrera">Carrera</label>
								<select name="carrera" class="form-control" id="" required="">
								@foreach($carreras as $carrera)
								<option 
									value="{{$carrera->id}}"
									@if($carrera->id = $estudiante->carreras->id)
										selected
									@endif>{{$carrera->nombre}}</option>
								@endforeach
								</select>
				        	</div>
							<div class="form-group">
				        		<label for="estatus">Estatus</label>
				        		<label for="">{{$carrera->estatus->id}}</label>
								<select name="estatu" class="form-control" id="" required="">
								@foreach($estatus as $estatu)
								<option 
									value="{{$estatu->id}}"
									@if($estatu->id === $estudiante->estatus->id)
										selected
									@endif
									>{{$estatu->nombre}}</option>
								@endforeach
								</select>
				        	</div>
					      </div>
					      <div class="modal-footer">
					        <input type="submit" name="crear" value="Editar" class="btn btn-primary">
                                <a class="btn btn-danger" href="/estudiantes">Atras</a>
					      </div>
				      </form>
                </div>
                

                
            </div>
        </div>
    </div>
</div>
@endsection

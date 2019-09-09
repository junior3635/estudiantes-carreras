@if($errors->any())
<div class="alert alert-danger">
   <strong>Problema al intentar actualizar su información:</strong>
   <ul>
      @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>

@elseif(isset($success))
   <div class="alert alert-success">
      <strong>Info:</strong> {{ $success }}
   </div>
@endif

@if(isset($borrada))
   <div class="alert alert-danger">
      <strong>Info:</strong> {{ $borrada }}
   </div>
@endif

@if(isset($carnettamaño))
   <div class="alert alert-danger">
      <strong>Info:</strong> {{ $carnettamaño }}
   </div>
@endif

@if(isset($noencontrado))
   <div class="alert alert-danger">
      <strong>{{ $noencontrado }}</strong> 
   </div>
@endif



<?php

namespace App\Http\Controllers;
use App\Sexo;
use App\Estatu;
use App\Estudiante;
use App\Pais;
use App\Estado;
use App\Ciudad;
use App\Carrera;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::with('carreras')->get();
        $paises = Pais::get();
        $estados = Estado::get();
        $ciudades = Ciudad::get();
        $carreras = Carrera::get();
        $estatus = Estatu::get();
        $sexos = Sexo::get();

        return view('estudiantes')->with([
            'estudiantes' => $estudiantes,
            'paises' => $paises,
            'estados' => $estados,
            'ciudades' => $ciudades,
            'carreras' => $carreras,
            'estatus' => $estatus,
            'sexos' => $sexos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = [
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],   
            'sexo' => $request['sexo'],
            'fecha_nac' => $request['fecha_nac'],
            'email' => $request['email'], 
            'pais' => $request['pais'],   
            'estado' => $request['estado'],   
            'ciudad' => $request['ciudad'],   
            'carrera' => $request['carrera'],
            'estatu' => $request['estatu'],

        ];
        //dd($datos);
        // $rules = [
        //     'nombre' => 'required',
        //     'apellidos' => 'required',
        //     'sexo' => 'required',
        //     'fecha_nac' => 'required',
        //     'email' => 'required|unique:estudiantes',
        //     'pais' => 'required',
        //     'estado' => 'required',
        //     'ciudad' => 'required',
        //     'carrera' => 'required',
        //     'estatus' => 'required',


        // ];
        // $messages = [
        //     'required' => 'Campo necesario',

        // ];

        // $this->validate($request, $rules, $messages);
        
        Estudiante::create($datos);
        return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paises = Pais::get();
        $estados = Estado::get();
        $ciudades = Ciudad::get();
        $carreras = Carrera::get();
        $estatus = Estatu::get();
        $sexos = Sexo::get();
        $estudiante = Estudiante::with('carreras')->with('estatus')->find($id);

        return view('estudianteedit')->with([
            'estudiante' => $estudiante,
            'paises' => $paises,
            'estados' => $estados,
            'ciudades' => $ciudades,
            'carreras' => $carreras,
            'estatus' => $estatus,
            'sexos' => $sexos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = [
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],   
            'sexo' => $request['sexo'],
            'fecha_nac' => $request['fecha_nac'],
            'email' => $request['email'], 
            'pais' => $request['pais'],   
            'estado' => $request['estado'],   
            'ciudad' => $request['ciudad'],   
            'carrera' => $request['carrera'],
            'estatu' => $request['estatu'],

        ];
        #dd($datos);
        $rules = [
            'nombre' => 'required',
            'apellidos' => 'required',
            'sexo' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'pais' => 'required',
            'estado' => 'required',
            'ciudad' => 'required',
            'carrera' => 'required',
            'estatu' => 'required',


        ];
        $messages = [
            'required' => 'Campo necesario',

        ];

        $this->validate($request, $rules, $messages);
        #dd($datos);
        Estudiante::where('id',$id)->update($datos);

        return redirect('estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::where('id',$id)->delete();
        return redirect('estudiantes');
    }
}

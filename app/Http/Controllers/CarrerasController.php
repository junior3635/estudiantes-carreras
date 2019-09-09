<?php

namespace App\Http\Controllers;
use App\Estatu;
use App\Carrera;
use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::with('estatus')->get();
        
        $estatus = Estatu::get();

        return view('carreras')->with(['carreras'=>$carreras,'estatus'=>$estatus]);
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
            'descripcion_larga' => $request['descripcion_larga'],   
            'estatu' => $request['estatu'],

        ];
        #dd($datos);
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

        Carrera::create($datos);
        return redirect('carreras');
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
    {   $estatus = Estatu::get();
        $carrera = Carrera::with('estatus')->find($id);
        return view('carreraedit')->with(['carrera'=>$carrera,'estatus'=>$estatus]);
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
            'descripcion_larga' => $request['descripcion_larga'],   
            'estatu' => $request['estatu'],

        ];
        #dd($datos);
        $rules = [
            'nombre' => 'required',
            'descripcion_larga' => 'required',
            'estatu' => 'required',


        ];
        $messages = [
            'required' => 'Campo necesario',

        ];

        $this->validate($request, $rules, $messages);

        Carrera::where('id',$id)->update($datos);
        return redirect('carreras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carrera::where('id',$id)->delete($datos,'cascade');
    }
}

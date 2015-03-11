<?php

class MascotaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pagina = 0;
		$mascotas = Mascota::where('estado','=',true)->skip(($pagina*10))->take(10)->get();
        return Response::json(array(
            'status' => true,
            'tipo' => 'respuesta',
            'datos' => $mascotas->toArray()),
            200
        );
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        if(!(Request::get('nombre') && Request::get('raza') && Request::get('color') && Request::get('tamano') && Request::get('edad') && Request::get('tipo') && Request::get('id_persona') && Request::get('lat') && Request::get('lon'))){
            return Response::json(array(
                'status' => false,
                'tipo' => 'validacion',
                'mensaje' => 'Uno o mas datos son necesarios'),
                200
            );
        }
        if(Input::hasFile('foto')){
            $f = Input::file('foto');
            $foto = base64_encode(file_get_contents($f->getRealPath()));
        }
        else{
            return Response::json(array(
                'status' => false,
                'tipo' => 'validacion',
                'mensaje' => 'Foto requerida'),
                200
            );
        }
        $mascota = new Mascota();
        $mascota->nombre = Request::get('nombre');
        $mascota->raza = Request::get('raza');
        $mascota->color = Request::get('color');
        $mascota->tamano = Request::get('tamano');
        $mascota->foto = $foto;
        $mascota->edad = Request::get('edad');
        $mascota->historia = Request::get('historia');
        $mascota->comentarios = Request::get('comentarios');
        $mascota->tipo = Request::get('tipo');
        $mascota->lat = Request::get('lat');
        $mascota->lon = Request::get('lon');
        $mascota->save();

        return Response::json(array(
            'status' => true,
            'tipo' => 'respuesta',
            'datos' => $mascota->id),
            200
        );

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $mascota = Mascota::where('estado','=',true)->where('id',(int)$id)->take(1)->get();
        return Response::json($mascota->toArray(),
            200
        );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

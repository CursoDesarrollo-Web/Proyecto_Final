<?php

namespace App\Http\Controllers;

use App\Models\Materiasprimas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriasprimasController extends Controller
{

    public function index()
    {
        //la pagina de inicio
        $datos = DB::table('materiasprimas as mp')
    ->select(
        'mp.id',
        'mp.nombre',
        'mp.descripcion',
        'mp.unidad_medida',
        'mp.cantidad',
        'mp.precio_unitario',
        'p.nombre as Proveedor',
        'mp.fecha_adquisicion',
        'mp.fecha_expiracion',
        'mp.estado'
    )
    ->join('proveedores as p', 'p.id', '=', 'mp.proveedor_id')
    ->get();
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //es el formulario donde nosotros agregamos datos

        return "aqui puedes agregar";
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la BD
    }
    public function show(Materiasprimas $materiasprimas)
    {
        //servira para obtener un registro de nuestra tabla    
    }
    public function edit(Materiasprimas $materiasprimas)
    {
        //este metodo nos sirve para traer los datos que se van a editar y los coloca en un formulario
    }

    public function update(Request $request, Materiasprimas $materiasprimas)
    {
        //  //este metodo actualiza los datos en la BD
    }

    public function destroy(Materiasprimas $materiasprimas)
    {
        //elimina un dato
    }
}

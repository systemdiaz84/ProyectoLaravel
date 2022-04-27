<?php

namespace App\Http\Controllers;

use App\Models\Arbol;
use Illuminate\Http\Request;

class ArbolController extends Controller
{
    function index($param = 'Árboles')
    {
        $arboles = Arbol::orderBy('id', 'desc')->paginate();

        return view('arbol.index', compact('arboles'))->with('param', $param);
    }

    function create($param = 'Árboles')
    {
        return view('arbol.create')->with('param', $param);
    }

    function show($param = 'Árboles')
    {

        $param = Arbol::find($param);

        return view('arbol.show', compact('param'));
    }

    function store(Request $request)
    {

        $arbol = new Arbol();

        $arbol->nombre = $request->nombre;
        $arbol->especie = $request->especie;
        $arbol->descripcion = $request->descripcion;

        $arbol->save();

        return redirect()->route('arbol.show', $arbol);

       
    }

    function edit($id){
        $arbol=Arbol::find($id);

        return view('arbol.edit',compact('arbol'));

    }

    function update(Request $request,$id){

        $arbol=Arbol::find($id);

       
        $arbol->nombre = $request->nombre;
        $arbol->especie = $request->especie;
        $arbol->descripcion = $request->descripcion;

        $arbol->save();

        return redirect()->route('arbol.show', $arbol);
    }

    function destroy($id){
        Arbol::find($id)->delete();

       return redirect()->route('arbol.index');

    }
}

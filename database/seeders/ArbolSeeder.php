<?php

namespace Database\Seeders;

use App\Models\Arbol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arbol = new Arbol();

        $arbol->nombre='Arbol 03';
        $arbol->especie='Decorativa';
        $arbol->descripcion='Árbol ornamental';
        $arbol->save();

        $arbol2 = new Arbol();

        $arbol2->nombre='Arbol 04';
        $arbol2->especie='Arbusto';
        $arbol2->descripcion='Arbusto pequeño';
        $arbol2->save();

        $arbol3 = new Arbol();

        $arbol3->nombre='Arbol 05';
        $arbol3->especie='Roble';
        $arbol3->descripcion='Árbol grande y frondoso';
        $arbol3->save();
    }
}

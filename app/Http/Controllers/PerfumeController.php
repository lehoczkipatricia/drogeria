<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view('perfumes', [
            'perfumes' => $perfumes
        ]);
    }

    public function newPerfume() {

        return view( "/new_perfume" );
    }

    public function storePerfume( Request $request ) {

        
        $perfume = new Perfume;


        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required'
        ]);


        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = (int)$request->price;

        $perfume->save();

        return redirect( "/perfumes" );


    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );


        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request, Perfume $perfume ) {
        

        $perfume->update([

            'name' => $request->name,
             'type' => $request->type,
             'price' => (int)$request->price
             ]);
             return redirect( 'perfumes' . $perfume->id );
    }

    public function deletePerfume(Perfume $perfume, $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/perfumes" );
    }
}

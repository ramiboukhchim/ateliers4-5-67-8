<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\classe;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $liste=Etudiant::orderby('nom','asc')->get(); 
        return view('etudiant',compact('liste'));
    }
    public function create(){
        $classes=classe::all();
        return view('create',compact('classes'));
    }
    public function store(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe_id'=>'required',
        ]);
        Etudiant::create($request->all());
        return redirect()->route('etudiant')
                         ->with('success','student created successfully');
    }

    public function edit(Etudiant $etudiant){
        $classes=Classe::all();

        return view('edit',compact('etudiant','classes'));

    }
    public function update(Request $request,Etudiant $etudiant){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe_id'=>'required'
        ]);
        $etudiant->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'classe_id'=>$request->classe_id

        ]);
        return redirect()->route('etudiant')
                         ->with('success','Student updated successfully');
    }
    public function delete(Etudiant $etudiant){
        $etudiant->delete();
        return redirect()->route('etudiant') // baeed matfasekh tarjaa lel page etudiant 
                       ->with('success','Post deleted successfully');
    }
}

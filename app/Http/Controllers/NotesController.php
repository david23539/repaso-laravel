<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function Indexs(){
        //conseguir todas las notas
        $notas = DB::table('notes')->orderBy('id','desc')->get();

//        var_dump($notas);

        return view('notes.index', array(
            'notes' => $notas
        ));
    }

    public function note($id){
        //Conseguir una nota
        $note = DB::table('notes')->select('id', 'title', 'descripcion')->where('id', $id)->first();

        if(empty($note)){

            return redirect()->action('NotesController@indexs');
        }
        return view('notes.note', array(
            'note'=>$note
        ));
    }

    public function createItem(Request $req){
        $note = DB::table('notes')->insert(array(
            'title' => $req->input('title'),
            'descripcion' => $req->input('description')
        ));

        return redirect()->action('NotesController@indexs');
    }

    public function saveNote(){
        return view('notes.saveNote');
    }

    public function deleteNote($id){
        //Eliminar nota
        $note = DB::table('notes')->where('id', $id)->delete();
        return redirect()->action('NotesController@indexs')->with('status','Registro borrado');
    }

    public function updateNotes($id, Request $req){
        $note = DB::table('notes')->where('id',$id)->update(array(
            'title'=>$req->input('title'),
            'descripcion'=>$req->input('descripcion')
        ));
        return redirect()->action('NotesController@indexs')->with('status','Registro actualizado');

    }

    public function getUpdateNotes($id){
        $note = DB::table('notes')-> where('id', $id)->first();
        return view('notes.saveNote', array(
            'note'=>$note
        ));
    }
}
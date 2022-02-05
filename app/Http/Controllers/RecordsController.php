<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\RecordsRequest;
use Illuminate\Routing\Controller;
use App\records;

class RecordsController extends Controller
{
    public function album($id){
        $records = new Records;
        return view('one-album', ['data' => $records->find($id)]);
    }

    public function redact($id){
        $records = new Records;
        return view('redact-album', ['data' => $records->find($id)]);
    }

    public function delete($id){
        Records::find($id)->delete();
        return redirect()->route('home')->with('success', 'Messages delete correct');
    }

    public function redactSubmit($id, Request $request){
       
        $records = Records::find($id);
        $records->title = $request->input('title');
        $records->author = $request->input('author');
        $records->body = $request->input('body');

        
        $records->save();
        return redirect()->route('album-data', $id);
 
        
     }

     public function create(){
        /*$records = new Records();
        $records->title = $request->input('title');
        $records->author = $request->input('author');
        $records->body = $request->input('body');
        $records->image = $request->input('message');
       
        $records->save();*/
 
        return view ('create-album');
        
     }
}

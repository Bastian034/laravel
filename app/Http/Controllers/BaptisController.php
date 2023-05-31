<?php

namespace App\Http\Controllers;

use App\Models\baptis;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class BaptisController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'=>'required|max:200',
            'nama_ayah'=>'required|max:200',
            'nama_ibu'=>'required|max:200',
            'tempat_lahir'=>'required|max:200',
            'tanggal_lahir'=>'required|max:200',
            'tanggal_baptis'=>'required|max:200',
        ]);

        $baptis = new baptis();
        $baptis->nama_lengkap = $request->nama_lengkap;
        $baptis->nama_ayah = $request->nama_ayah;
        $baptis->nama_ibu = $request->nama_ibu;
        $baptis->tempat_lahir = $request->tempat_lahir;
        $baptis->tanggal_lahir = $request->tanggal_lahir;
        $baptis->tanggal_baptis = $request->tanggal_baptis;
        $baptis->save();

        return response()->json(['message'=>'Register baptis added succesfully'], 200);

    }

    public function patch(Request $request){
        $response = baptis::whereId($request->id)->update($request->all());
        if($response){
            return response()->json(["message"=>"success", "data"=>$request->all()], 200);
        } else{
            return response()->json(["message"=>"not found"], 404);
        }  

        return response()->json(["message"=>"internal server error"], 500);
    }

    public function delete($id){
        $response = baptis::where('id', $id)->delete();
        if($response){
            return response()->json(["message"=>"success deleted"], 200);
        } else{
            return response()->json(["message"=>"not found"], 404);
        }

        return response()->json(["message"=>"internal server error"], 500);
    }

    public function getAll(){
        $data = baptis::all();

        return response()->json($data, 200);
    }

    public function getByUserID($user_id){
        // $user = User::where('id', $user_id)->get();
        $response = baptis::find($user_id);
        if($response){
            return response()->json(["message"=>"success", "data"=>$response], 200);
        } else{
            return response()->json(["message"=>"not found"], 404);
        }  

        return response()->json(["message"=>"internal server error"], 500);
    }

    public function getByID(Request $request){}
}

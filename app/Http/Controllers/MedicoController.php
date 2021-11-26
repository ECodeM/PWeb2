<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreMedicoRequest;
use App\Http\Requests\UpdateMedicoRequest;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class MedicoController extends Controller
{
    public function index(){

        $medico = Medico::all();
        return Response() ->json($medico);
    }

    public function show($id){

        $medico = Medico::findOrFail($id);
        return response() ->json($medico);
    }

    public function store(Request $request){

        $dado = $request->all();

         $validator = Validator:: make($dado, (new StoreMedicoRequest())->rules());
        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $medico = Medico::create($dado);
        return response()->json($medico, 201);
    }

    public function update(Request $request, $id){

        $dado = $request -> all();

        $validator = Validator::make($dado, (new UpdateMedicoRequest())->rules());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Medico:: findOrFail($id)->update($dado);
        return $this -> show($id);
    }

    public function destroy($id){

        Medico:: findOrFail($id)->delete();
        return response() ->json('', 204);
    }





}

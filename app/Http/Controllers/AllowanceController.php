<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllowanceController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_pegawai' => 'required',
            'allowance_name' => 'required',
            'allowance_type' => 'required',
            'allowance_fee' => 'required',
            'allowance_period' => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $allowance = Allowance::create([
            'kode_pegawai' => $request->kode_pegawai,
            'allowance_name' => $request->allowance_name,
            'allowance_type' => $request->allowance_type,
            'allowance_fee' => $request->allowance_fee,
            'allowance_period' => $request->allowance_period
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan!',
            'data'    => $allowance
        ]);
    }

    public function show(Allowance $allowance)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail data allowance',
            'data' => $allowance
        ]);
    }

    public function update(Request $request, Allowance $allowance)
    {
        $validator = Validator::make($request->all(), [
            'allowance_name' => 'required',
            'allowance_type' => 'required',
            'allowance_fee' => 'required',
            'allowance_period' => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $allowance->update([
            'allowance_name' => $request->allowance_name,
            'allowance_type' => $request->allowance_type,
            'allowance_fee' => $request->allowance_fee,
            'allowance_period' => $request->allowance_period
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan!',
            'data'    => $allowance
        ]);
    }

    public function destroy(string $id)
    {
        //delete post by ID
        Allowance::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus!.',
        ]);
    }
}

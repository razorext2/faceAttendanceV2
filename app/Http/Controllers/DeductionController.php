<?php

namespace App\Http\Controllers;

use App\Models\Deduction;
use App\Models\Pegawai;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Number;
use Illuminate\Support\Facades\Crypt;

class DeductionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_pegawai' => 'required',
            'deduction_name' => 'required',
            'deduction_type' => 'required',
            'deduction_fee' => 'required',
            'deduction_period' => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $deduction = Deduction::create([
            'kode_pegawai' => $request->kode_pegawai,
            'deduction_name' => $request->deduction_name,
            'deduction_type' => $request->deduction_type,
            'deduction_fee' => $request->deduction_fee,
            'deduction_period' => $request->deduction_period
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan!',
            'data'    => $deduction
        ]);
    }

    public function show(Deduction $deduction)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail data deduction',
            'data' => $deduction
        ]);
    }

    public function update(Request $request, Deduction $deduction)
    {
        $validator = Validator::make($request->all(), [
            'deduction_name' => 'required',
            'deduction_type' => 'required',
            'deduction_fee' => 'required',
            'deduction_period' => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $deduction->update([
            'deduction_name' => $request->deduction_name,
            'deduction_type' => $request->deduction_type,
            'deduction_fee' => $request->deduction_fee,
            'deduction_period' => $request->deduction_period
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan!',
            'data'    => $deduction
        ]);
    }

    public function destroy(string $id)
    {
        //delete post by ID
        Deduction::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus!.',
        ]);
    }
}

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
    public function index($id)
    {
        $pegawai = Pegawai::with('salaryRelasi')->findOrFail(Crypt::decrypt($id));
        if (request()->ajax()) {
            $deduction = Deduction::where('kode_pegawai', $pegawai->kode_pegawai);
            Datatables::eloquent($deduction)
                ->addColumn('actions', function ($data) {
                    $editBtn = '<button class="text-sm text-blue-500 hover:underline" id="btn-edit-deduction" data-id="' . $data->id . '">
									<span class="hover:underline"> Edit </span>
								</button>';
                    return $editBtn;
                })
                ->editColumn('deduction_fee', function ($data) {
                    return Number::currency($data->deduction_fee, 'IDR', 'id');
                })
                ->editColumn('deduction_type', function ($data) {
                    if ($data->deduction_type <= 100) {
                        return $data->deduction_type . ' %';
                    } else {
                        return Number::currency($data->deduction_type, 'IDR', 'id');
                    }
                })
                ->editColumn('deduction_period', function ($data) {
                    return Carbon::parse($data->deduction_period)->locale('id')->isoFormat('MMMM YYYY');
                })
                ->rawColumns(['actions'])
                ->orderColumn('deduction_name', 'deduction_name asc')
                ->toJson();
        }
    }
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
        //
    }
}

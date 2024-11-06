<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Models\Pegawai;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Number;
use Illuminate\Support\Facades\Crypt;

class AllowanceController extends Controller
{
    public function index($id)
    {
        $pegawai = Pegawai::with('salaryRelasi')->findOrFail(Crypt::decrypt($id));
        if (request()->ajax()) {
            $allowance = Allowance::where('kode_pegawai', $pegawai->kode_pegawai);
            return Datatables::eloquent($allowance)
                ->addColumn('actions', function ($data) {
                    $editBtn = '<button class="text-sm text-blue-500 hover:underline" id="btn-edit-allowance" data-id="' . $data->id . '">
									<span class="hover:underline"> Edit </span>
								</button>';
                    return $editBtn;
                })
                ->editColumn('allowance_fee', function ($data) {
                    return Number::currency($data->allowance_fee, 'IDR', 'id');
                })
                ->editColumn('allowance_type', function ($data) {
                    if ($data->allowance_type <= 100) {
                        return $data->allowance_type . ' %';
                    } else {
                        return Number::currency($data->allowance_type, 'IDR', 'id');
                    }
                })
                ->editColumn('allowance_period', function ($data) {
                    return Carbon::parse($data->allowance_period)->locale('id')->isoFormat('MMMM YYYY');
                })
                ->rawColumns(['actions'])
                ->orderColumn('allowance_name', 'allowance_name asc')
                ->toJson();
        }
        return view('dashboard.pegawai.details.components.allowances-section');
    }
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
        //
    }
}

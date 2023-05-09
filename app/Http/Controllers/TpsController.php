<?php

namespace App\Http\Controllers;

use App\Models\Tps;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tps = Tps::all();
        return view('home', compact('tps'));

        redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tps = Tps::create([
           'nama_tps' => $request->input('nama_tps'),
           'longitude' => $request->input('longitude'),
           'latitude' => $request->input('latitude'),
           'alamat' => $request->input('alamat'),
           'volume' => $request->input('volume'),
        ]);

        if ($tps) {
            return response()->json([
                'status' => true,
                'message' => 'Data TPS berhasil disimpan!',
                'data' => $tps,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data TPS gagal disimpan!',
            ], 401);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magang = Magang::all();
        return response()->json($magang);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $magang = Magang::create([
            'tempat_magang' => $request->input('tempat-magang'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
            'alamat' => $request->input('alamat'),
            'deskripsi' => $request->input('deskripsi')
        ]);

        if ($magang) {
            return response()->json([
                'status' => true,
                'message' => 'Data berhasil ditambahkan',
                'data' => $magang,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data gagal disimpan!',
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Magang $magang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Magang $magang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magang $magang)
    {
        //
    }
}

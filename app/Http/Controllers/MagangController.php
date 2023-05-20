<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;
use GeoJson\Feature\Feature;
use GeoJson\Feature\FeatureCollection;
use GeoJson\Geometry\Point;


class MagangController extends Controller
{

    public function index()
    {
        $magang = Magang::all();
        return view('daftarMagang', compact('magang'));
    }

    public function titik(){
        $result = Magang::all();
        return json_encode($result);
    }

    public function lokasi($id)
    {
        $data = Magang::find($id);
        return json_encode($data);
    }

    function showProperties()
    {
        $properties = Magang::all();

        $features = [];

        foreach ($properties as $property) {
            $point = new Point([$property->longitude, $property->latitude]);
            $properties = [
                'tempat_magang' => $property->tempat_magang
            ];
        }
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
            'kecamatan' => $request->input('kecamatan'),
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
    public function show($id)
    {
        $data = Magang::find($id);
        if(!$data) {
            abort(404);
        }

        return json_encode($data);
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

    public function getLocation() {
        $location = Magang::all();
        return $location;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function showDetail($id)
    {
        $data = Magang::find($id);
        return view('detail', compact('data'));
    }

    public function store(Request $request)
    {

        $magang = Magang::create([
            'tempat_magang' => $request->input('tempat-magang'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
            'alamat' => $request->input('alamat'),
            'kecamatan' => $request->input('kecamatan'),
            'deskripsi' => $request->input('deskripsi'),
            'path_gambar' => $request->file('gambar')->store('post-images')
        ]);
        return redirect('/tambahData');
    }

    public function getTotalData()
    {
        $totalData = Magang::table('magangs')->count();

        return $totalData;
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

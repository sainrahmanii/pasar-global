<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdukRequest;
use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();

        return view('admin.produk.tambahproduk', compact('provinces'));
    }

    public function getkota(request $request)
    {
        $id_prov = $request->id_prov;

        $kota = Regency::where('province_id', $id_prov)->get();
        
        foreach ($kota as $k) {
            echo "<option value='$k->id'>$k->name</option>";
        }
    }

    public function getkec(request $request)
    {
        $id_kota = $request->id_kota;

        $kecamatan = District::where('regency_id', $id_kota)->get();

        foreach ($kecamatan as $k) {
            echo "<option value='$k->id'>$k->name</option>";
        }
    }

    public function getkel(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $kelurahan = Village::where('district_id', $id_kecamatan)->get();

        foreach ($kelurahan as $k) {
            echo "<option value='$k->id'>$k->name</option>";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

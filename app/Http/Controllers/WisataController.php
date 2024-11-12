<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Menampilkan semua data wisata.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAll()
    {
        return response()->json(Wisata::all());
    }

    /**
     * Menampilkan satu data wisata berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function showOne($id)
    {
        return response()->json(Wisata::find($id));
    }

    /**
     * Membuat data wisata baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $wisata = Wisata::create($request->all());
        return response()->json($wisata, 201);
    }

    /**
     * Memperbarui data wisata berdasarkan ID.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->update($request->all());
        return response()->json($wisata, 200);
    }

    /**
     * Menghapus data wisata berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Wisata::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}

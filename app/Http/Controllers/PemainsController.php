<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pemain;

class PemainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemains = DB::table('pemains') -> get();
        return view('pemains.pemains')->with("pemains", $pemains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemain = new Pemain();
        $pemain->nama = $request->nama;
        $pemain->film_id = $request->film_id;
        $pemain->save();

        return redirect('/pemains') -> with('status', 'Data Pemain Berhasil Ditambahkan !');
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
        $pemain = Pemain::find($id);
        return view("pemains.edit")->with("pemain", $pemain);
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
        $pemain = Pemain::findOrFail($id);
        $pemain->nama = $request->nama;
        $pemain->film_id = $request->film_id;

        $pemain->save();
        return redirect('/pemains')->with('status', 'Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemain = Pemain::find($id);
        $pemain->delete();
        return redirect("/pemains")->with('status', 'Data Berhasil Dihapus !');
    }
}

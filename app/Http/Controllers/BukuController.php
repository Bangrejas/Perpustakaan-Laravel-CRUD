<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku=\App\Buku::all();
        return view('index',compact('buku'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $book = new \App\Buku;
        $book->judul = $request->get('judul');
        $book->penerbit = $request->get('penerbit');
        $book->tahun_terbit = $request->get('tahun_terbit');
        $book->pengarang = $request->get('pengarang');
        $book->save();
        
        return redirect('buku')->with('success', 'Data buku telah ditambahkan');  
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
        $buku = \App\Buku::find($id);
        return view('edit',compact('buku','id'));   
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
        $buku= \App\Buku::find($id);
        $buku->judul = $request->get('judul');
        $buku->penerbit = $request->get('penerbit');
        $buku->tahun_terbit = $request->get('tahun_terbit');
        $buku->pengarang = $request->get('pengarang');
        $buku->save();
        return redirect('buku')->with('success', 'Data buku telah diubah');   
    
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
        $buku = \App\Buku::find($id);
        $buku->delete();
        return redirect('buku')->with('success','Data buku telah di hapus');
    }
}

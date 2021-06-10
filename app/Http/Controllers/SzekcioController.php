<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szekciok;
use App\Models\Esemenyek;

class SzekcioController extends Controller
{
    public function index()
    {

        $szekciok = Szekciok::all();

        return view('dashboard.szekciok.index', compact('szekciok'));
    }
    public function create()
    {
        $esemenyek = Esemenyek::all();
        return view('dashboard.szekciok.create', compact('esemenyek'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'szekcionev' => 'required|string',
            'idopont' => 'required|string',
            'link' => 'required|string',
            'online' => 'required|integer',
            'esemenyek_id' => 'required|integer',
        ]);
        $szekcio = new Szekciok([
            'szekcionev' => $request->input('szekcionev'),
            'idopont' => $request->input('idopont'),
            'link' => $request->input('link'),
            'online' => $request->input('online'),
            'esemenyek_id' => $request->input('esemenyek_id'),
        ]);
        $szekcio->save();

        return redirect('/admin/szekciok')->with('status', 'Szekcio hozzadva');
    }
    public  function delete($id)
    {
        $szekcio = Szekciok::find($id);
        $szekcio->delete();
        return redirect('/admin/szekciok')->with('status', 'Szekcio torolve');
    }
    public function edit($id)
    {
        $esemenyek = Esemenyek::all();
        $szekcio = Szekciok::find($id);
        return view('dashboard.szekciok.edit', compact('szekcio', 'id', 'esemenyek'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'szekcionev' => 'required|string',
            'idopont' => 'required|string',
            'link' => 'required|string',
            'online' => 'required|integer',
            'esemenyek_id' => 'required|integer',
        ]);

        $szekcio = Szekciok::find($id);
        $szekcio->szekcionev = $request->input('szekcionev');
        $szekcio->idopont = $request->input('idopont');
        $szekcio->link = $request->input('link');
        $szekcio->online = $request->input('online');
        $szekcio->esemenyek_id = $request->input('esemenyek_id');
        $szekcio->save();
        return redirect('/admin/szekciok')->with('status', 'Szekcio frisitve');
    }
}

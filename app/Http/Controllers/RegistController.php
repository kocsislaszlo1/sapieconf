<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szekciok;
use App\Models\Eloadok;
use Symfony\Component\Console\Input\Input;

class RegistController extends Controller
{
    public function index()
    {
        $szekciok = Szekciok::all();
        return view('register', compact('szekciok'));
    }
    public function store(Request $request)
    {
        $szekciok = $request->input('szekcio_id');
        $request->validate([
            'nev' => 'required|string',
            'fokozat' => 'required|string',
            'intezmeny' => 'required|string',
            'eloadascim' => 'required|string',
            'email' => 'required|email',
            'kivonat' => 'required|string',
            'szekcio_id' => 'required|integer'
        ]);
        $eloadok = new Eloadok([
            'nev' => $request->input('nev'),
            'fokozat' => $request->input('fokozat'),
            'intezmeny' => $request->input('intezmeny'),
            'eloadascim' => $request->input('eloadascim'),
            'email' => $request->input('email'),
            'kivonat' => $request->input('kivonat'),
        ]);

        $eloadok->save();
        $eloadok->szekciok()->attach($szekciok);
        return redirect('/regist')->with('status', 'Sikeres  regisztracio');
    }
}

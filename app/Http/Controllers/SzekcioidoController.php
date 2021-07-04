<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szekciok;
use App\Models\Esemenyek;
use App\Models\Eloadok;

class SzekcioidoController extends Controller
{

    public  function delete(Request $request,$id)
    {
        $eloadok = Eloadok::find($id);
        $szekcioid = $request->input('szekcio_id');
        $eloadok->szekciok()->updateExistingPivot($szekcioid,["kezdete"=>null,'vege'=>null]);
        return back()->with('status', 'idopont torolve');
    }
    public function edit($id)
    {
        $szekciok = Szekciok::find($id);
        $eloadok = Eloadok::whereHas('szekciok', function ($q) use ($szekciok) {
            $q->where('eloadok_szekciok.szekcio_id', '=', $szekciok->id);
        })->get();
        return view('dashboard.szekciok.idopont', compact('szekciok', 'id', 'eloadok'));
    }
    public function update(Request $request, $id)
    {

        $eloadok = Eloadok::find($id);
        $szekcioid = $request->input('szekcio_id');
        $kezdete = $request->input('kezd');
        $eloadok->szekciok()->updateExistingPivot($szekcioid, ['kezdete' => $kezdete]);
        
        $eloadok->save();
         return back()->with('status', 'ido frissitve');
    }
    public function update2(Request $request, $id)
    {

        $eloadok = Eloadok::find($id);
        $szekcioid = $request->input('szekcio_id');
        $vege = $request->input('vege');
        $eloadok->szekciok()->updateExistingPivot($szekcioid, ['vege' => $vege]);

        $eloadok->save();
         return back()->with('status', 'ido frissitve');
    }
}

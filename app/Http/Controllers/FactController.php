<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function all_facts()
    {
        $facts = Fact::all();
        return view('backend.facts.all_facts' , compact('facts'));
    }

    public function edit($id)
    {
        $facts = Fact::find($id);
        return view('backend.facts.edit_facts' , compact('facts'));
    }

    public function update(Request $request, $id)
    {
        $Hapy       = $request->Hapy;
        $Projects   = $request->Projects;
        $Hours      = $request->Hours;
        $Hard       = $request->Hard;

        $facts = Fact::find($id);
        $facts->update([
            'Hapy'      =>$Hapy,
            'Projects'  =>$Projects,
            'Hours'     =>$Hours,
            'Hard'      =>$Hard,
        ]);
        $facts->save();
        return redirect()->route('dashboard.all_facts');
    }

}

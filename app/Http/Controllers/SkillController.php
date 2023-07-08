<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\SkillRequest;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function all_skills()
    {
        $skills = Skill::all();
        return view('backend.skills.all_skills' , compact('skills'));
    }


    public function create()
    {
        return view('backend.skills.add_skill');
    }

    public function store(SkillRequest $request)
    {
        $title = $request->title;
        $rate  = $request->rate;

        $skills = Skill::create([
            'title' => $title,
            'rate'  => $rate,
        ]);

        $skills->save();

        return redirect()->route('dashboard.all_skills');
    }

    public function edit($id)
    {
        $skills = Skill::find($id);
        return view('backend.skills.edit_skill' , compact('skills'));
    }

    public function update(SkillRequest $request,$id)
    {
        $title = $request->title;
        $rate  = $request->rate;

        $skills = Skill::find($id);

        $skills->update([
            'title' => $title,
            'rate'  => $rate,
        ]);

        $skills->save();

        return redirect()->route('dashboard.all_skills');
    }

    public function destroy($id)
    {
        $skills = Skill::find($id);
        $skills->delete();
        return redirect()->route('dashboard.all_skills');
    }
}

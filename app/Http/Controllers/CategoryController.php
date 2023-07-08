<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function all_category()
    {
        $categorys = Category::all();
        return view('backend.category.all_category' , compact('categorys'));
    }


    public function create()
    {
        return view('backend.category.add_category');
    }

    public function store(CategoryRequest $request)
    {
        $name = $request->name;

        $categorys = Category::create([
            'name' => $name
        ]);
        $categorys->save();
        return redirect()->route('dashboard.all_category');
    }

    public function edit($id)
    {
        $categorys = Category::find($id);
        return view('backend.category.edit_category' , compact('categorys'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $name = $request->name;
        $categorys = Category::find($id);
        $categorys->update([
            'name' => $name
        ]);
        $categorys->save();
        return redirect()->route('dashboard.all_category');

    }

    public function delete($id)
    {
        $categorys = Category::find($id);
        $categorys->delete();
        return redirect()->route('dashboard.all_category');

    }
}

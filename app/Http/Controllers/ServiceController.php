<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function all_service()
    {
        $service = Service::all();
        return view('backend.service.all_service' , compact('service'));
    }

    public function create()
    {
        return view('backend.service.add_service');
    }

    public function store(ServiceRequest $request)
    {
        $name           = $request->name;
        $icon           = $request->icon;
        $description    = $request->description;

        $service = Service::create([
            'name'         => $name,
            'icon'         => $icon,
            'description'  => $description,
        ]);

        $service->save();

        return redirect()->route('dashboard.all_service');
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.service.edit_service' , compact('service'));
    }


    public function update(ServiceRequest $request,$id)
    {
        $name           = $request->name;
        $icon           = $request->icon;
        $description    = $request->description;

        $service = Service::find($id);

        $service->update([
            'name'         => $name,
            'icon'         => $icon,
            'description'  => $description,
        ]);

        $service->save();

        return redirect()->route('dashboard.all_service');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('dashboard.all_service');
    }
}

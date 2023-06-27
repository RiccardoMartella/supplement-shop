<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin\Supplement;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function index()
    {
        $supplements = Supplement::all();

        return view('admin.indexAdmin', compact('supplements'));
    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        $supplements = Supplement::all();

        return view('admin.create', compact('supplements'));
    }

    public function destroy(Supplement $supplement)
    {
        $supplement->delete();

        return redirect()->route('admin.indexAdmin');
    }


    public function show(Supplement $supplement)
    {
        return view('admin.show', compact('$supplements'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $request->all();

        $new_progetto = new Supplement();

        $new_progetto->fill($form_data);
        $new_progetto->save();

        return redirect()->route('admin.dashboard');
    }
}

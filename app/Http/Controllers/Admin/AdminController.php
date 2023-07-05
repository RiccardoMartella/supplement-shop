<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Admin\Supplement;
use App\Models\Category;
use App\Models\Supplement as ModelsSupplement;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function index()
    {
        $supplements = ModelsSupplement::all();

        return view('admin.indexAdmin', compact('supplements'));
    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        $supplements = ModelsSupplement::all();

        return view('admin.create', compact('supplements', 'categories'));
    }

    public function destroy(ModelsSupplement $supplement)
    {
        $supplement->delete();

        return redirect()->route('admin.indexAdmin');
    }


    public function show(ModelsSupplement $supplement)
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

        $new_progetto = new ModelsSupplement();

        $new_progetto->fill($form_data);
        $new_progetto->save();

        return redirect()->route('admin.dashboard');
    }
}

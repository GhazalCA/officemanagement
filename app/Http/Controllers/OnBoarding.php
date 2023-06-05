<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnBoarding extends Controller
{

    public function index()
    {
        //
    }
    /*
    public function index(): View{
        return view('chirps.index', [
            'chirps' => Chirp::with('user')->latest()->get(),
        ]);
    }*/



    public function create()
    {
        //$name= 'Ghazal';
        //return view('onboarding.create',compact('name'));
    }

    public function store(Request $request): RedirectResponse
    {
        //dd('test'); << good to get to the page and view it while not displaying :D
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        //$request->user()->OnBoarding()->store($validated); ERRORRORORORRORRRRR, figure out why later
        $request->user()->
        return redirect(route('employeereq.index'));
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

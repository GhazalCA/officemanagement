<?php

namespace App\Http\Controllers;

use App\Models\RQN;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RQNController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //return view('RQN.index');
        return view('RQN.index', [
            'chirps' => RQN::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->RQN()->create($validated);

        return redirect(route('RQN.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(RQN $rQN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RQN $rQN)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RQN $rQN)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RQN $rQN)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerizinanPenyelenggaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('admin.perizinanPenyelenggaraan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_sd_smp()
    {

        return view('admin.perizinanPenyelenggaraan.sd-smp.create');
    }

    public function create_lpnp()
    {
        return view('admin.perizinanPenyelenggaraan.lpnp.create');
    }

    public function create_lpp()
    {
        return view('admin.perizinanPenyelenggaraan.lpp.create');
    }

    public function create_lpts()
    {
        return view('admin.perizinanPenyelenggaraan.lpts.create');
    }

    public function create_pklpk()
    {
                return view('admin.perizinanPenyelenggaraan.pklpk.create');
    }

    public function create_ppo()
    {
                return view('admin.perizinanPenyelenggaraan.ppo.create');

    }

    public function create_ptn_univ()
    {
                return view('admin.perizinanPenyelenggaraan.ptn-univ.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

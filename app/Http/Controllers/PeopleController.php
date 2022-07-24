<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\People;
use Yajra\Datatables\Datatables;
use App\Models\Position;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function anyData()
    {

        return Datatables::of(People::query())->make(true);
            
    }

    public function index()
    {
        // return People::all();
        $peoples = People::query()->orderBy('created_at', 'DESC')->get();
        // $peoples = Datatables::of(People::query())->make(true);

        return view('admin.people.index', [
            'title'         => 'People',
            'peoples'       => $peoples
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.people.create', [
            'title'         => 'Add People',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepeopleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepeopleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function show(people $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(people $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepeopleRequest  $request
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepeopleRequest $request, people $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people)
    {
        //
    }
}

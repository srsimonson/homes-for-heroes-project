<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // All Persons
        $persons = Persons::all()->toArray();
        return response()->json('All persons: ', $persons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Add a person
        $person = new Persons([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
        ]);
        $person->save();
        return response()->json('Person added: ', $person);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     // GET person
    //     $person = Persons::where('id', $id)->first();
    //     return View::make('persons.show', compact('person'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Edit age
        $person = Persons::find($id);
        return response()->json($person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function update($id, Persons $person)
    {
        //Update age
        $person = Persons::find($id);
        // $person->age= Input::get('age');
        $person->update($person->all());
        return response()->json($person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete person
        $person = Persons::find($id);
        $person->delete();
        return response()->json($person);
    }
}

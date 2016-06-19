<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ShelterRequest;
use App\Shelter;
use Auth;
use Illuminate\Support\Facades\Gate;
use DB;

class SheltersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shelters = Shelter::all();
        return view('shelters.index', compact('shelters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shelters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShelterRequest $request)
    {

        //auth()->loginUsingId(2);
        $shelter = new Shelter($request->all());

        Auth::user()->shelters()->save($shelter);

        return redirect('shelters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //auth()->loginUsingId(1);
        $shelter = Shelter::findOrFail($id);
//        if (Gate::denies('super_admin', $shelter)) {
//            abort(403, 'Sorry, you don\'t have permission to view this page.');
//        }

        return view('shelters.show', compact('shelter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shelter = Shelter::findOrFail($id);

        $users = DB::table('shelter_user')->select('user_id')
            ->where('shelter_id', '=', $shelter->id)
            ->get();

        $validUser = false;
        foreach($users as $user) {
            if ($user->user_id == Auth::user()->id) {
                $validUser = true;
            }
        }

        if($validUser) {
            // show the edit form and pass the shelter
            return view('shelters.edit', compact('shelter'));
        }
        else {
            abort(403, 'Sorry, you don\'t have permission to view this page.');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShelterRequest $request, $id)
    {
        $shelter = Shelter::findOrFail($id);

        $shelter->update($request->all());

        return redirect('shelters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

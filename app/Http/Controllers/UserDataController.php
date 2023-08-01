<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\UserDataStoreRequest;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('UserData/UserDataCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserDataStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserData $userData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserData $userData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserData $userData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserData $userData)
    {
        //
    }

    public function setCookie(Request $request)
    {
        $requestData = [
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'sport_per_week' => $request->input('sport_per_week'),
            'activity' => $request->input('activity'),
            'food' => $request->input('food'),
            'goal' => $request->input('goal'),
            'allergy' => $request->input('allergy'),
            'plan' => $request->input('plan'),
        ];
    }
}

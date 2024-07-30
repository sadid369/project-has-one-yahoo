<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('company')->with('phoneNumber')->get();
        //    $users= User::with('company')->with('phoneNumber')->find(2);
        //    echo $users->name ."<br>";
        //    echo $users->company->company_name ."<br>";
        //    echo $users->phoneNumber->numbers ."<br>";

        foreach ($users as $user) {
            echo $user->name . "<br>";
            echo $user->email . "<br>";

            echo  $user->company->company_name . "<br>";
            // echo  $user->company->user_id . "<br>";


            echo   $user->phoneNumber->numbers . "<br>";
            // echo  $user->phoneNumber->company_id . "<br>";
            // echo   $user->phoneNumber->laravel_through_key . "<br>";

            echo "<hr>";
        }

        // return $users;
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

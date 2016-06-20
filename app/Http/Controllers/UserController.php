<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
		/**
		 * Get all users.
		 * 
		 * @return [type] [description]
		 */
    public function getUsers()
    {
    	return User::with('role')->paginate(5);
    }

    /**
     * Create a new user.
     * 
     * @param  Illuminate\Http\Request $request
     * @param  App\User    $user
     * 
     * @return App\User
     */
    public function store(Request $request, User $user)
    {   	
    	return $user->createUser($request->all());
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	/**
	 * Get all users.
     * @param  Illuminate\Http\Request $request
     * 
	 * @return [type] [description]
	 */
    public function getUsers(Request $request)
    {
        $pagin_limit = request()->input('pagin_limit') ?: $this->pagin_limit;

    	return User::with('role')->paginate($pagin_limit);
    }

    /**
     * Check if user name already exist.
     * 
     * @param  string $user_name
     * 
     * @return int
     */
    public function userExist($user_name)
    {
        return (int) User::where('user_name', '=', $user_name)->exists();
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
        $validator = \Validator::make($request->all(), [
            'user_name' => 'required|unique:users|max:255',
        ]);

        if ($validator->fails()) {
            return response(['failed' => true, 'validator' => $validator->errors()], 422);
        }

    	return $user->createUser($request->all());
    }
}

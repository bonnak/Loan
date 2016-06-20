<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;

class RedirectIfAuthenticated
{
  /**
   * The JWTAuth instance.
   *
   * @var \Tymon\JWTAuth\JWTAuth
   */
  protected $auth;

  /**
   * Create a new JWT provider instance.
   *
   * @param \Tymon\JWTAuth\JWTAuth $auth
   *
   * @return void
   */
  public function __construct(JWTAuth $auth)
  {
      $this->auth = $auth;
  }

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  $guard
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = null)
  {
      // if (Auth::guard($guard)->check()) {
      //     return redirect('/');
      // }
      
      $token = $request->cookie('token');
      
      if($token && $this->auth->setToken($token)->authenticate())
      {
          return redirect('/');
      }

      return $next($request);
  }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class Authenticate
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
      // if (Auth::guard($guard)->guest()) {
      //     if ($request->ajax() || $request->wantsJson()) {
      //         return response('Unauthorized.', 401);
      //     } else {
      //         return redirect()->guest('login');
      //     }
      // }
      
      
      // Handle JWT Auth token.
      try 
      {
          $token = $request->cookie('token');

          if (! $user = $this->auth->setToken($token)->authenticate()) {
              return redirect()->to('login');
          }
      } 
      catch (JWTException $exception) 
      {
        return redirect()
                  ->to('login')
                  ->withCookie(cookie()->forget('token'));
      } 

      return $next($request);
  }
}

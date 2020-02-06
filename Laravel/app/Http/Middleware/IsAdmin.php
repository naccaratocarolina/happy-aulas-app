<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\UserController;
use Auth;
use App\User;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
          return $next($request);
        }
        else{
          return response()->json('Não é admin');
        }
    }
}

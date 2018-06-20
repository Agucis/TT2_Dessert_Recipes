<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
      if($request->user() === null)
        {
           return response("You are not logged in",401);
        }
      $thisUser = $request->user();

      if ($thisUser['role'] ===null)//ka tev datubaze ir loma nosaukta? role
          return response("For some reason you don't have any role ,please contact a system administrator",401);

      if($thisUser['role'] !== 'admin')
        return response("You do not have sufficent privilages",401);
        return $next($request);
    }
}

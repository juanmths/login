<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Auth;
   
class User
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
        if(auth()->user()->admin == 0){
            return $next($request);
        }
   
        return redirect()->back()->with('error',"You don't have admin access.");

    }
}
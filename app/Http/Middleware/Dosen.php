<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Auth;
   
class Dosen
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
        if(auth()->user()->admin == 3){
            return $next($request);
        }
   
        return redirect()->back()->with('error',"You don't have admin access.");

    }
}
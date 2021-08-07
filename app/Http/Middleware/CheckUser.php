<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // dd($request->all());
       if($request->has('reg') && $request->has('uname')){
           $user = User::where('name', $request->get('uname'))->first();
           if(isset($user) && $user!=null){
               return redirect()->back()->with('error', 'Username already taken!');
           }
       }
        return $next($request);
    }
}
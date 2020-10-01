<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\DriverRegister;
class verify_admin
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
        if(isset(Auth::user()->email)){
        if(Auth::user()->email=='ahsan.malik1010@hotmail.com' || Auth::user()->email=='MuhammadUmaira98@gmail.com'){


        }
        else{
        abort(403, 'Unauthorized action.');
        }

}
else{
    abort(403, 'Unauthorized action.');
}
$registeredDriver=DriverRegister::get()->all();

return $next($request);
}
}

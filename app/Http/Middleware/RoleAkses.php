<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use M_User;

class RoleAkses
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
        if (auth()->user()->M_Role->nama_role == 'Admin') {
            return $next($request);
        }elseif (auth()->user()->M_Role->nama_role == 'Petugas') {
            return redirect()->route('home');
        }elseif (auth()->user()->M_Role->nama_role == 'Kepala Sekolah') {
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }
}

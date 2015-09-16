<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;

class EmailMiddleware
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
        $user=Auth::user();
        $diff=Carbon::parse($user->created_at)->diffInDays();
        if($diff>30){
            // user cant login and he/she should confirm
            return redirect(url('auth/email'));
        }elseif(!$user->confirmed){
            Flash::info(trans('users.pleaseConfirmEmail', ['remain' => (30-$diff)])."&ensp;<b><a href='".url('auth/email')."'>".trans('users.confirmEmailResend')."</a></b>" );
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckUserAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::whereHas('programs', function ($query) {
            $query->where('program_id', config('custom.list_program_ids')['hrm']);
        })->where('email', $request->email)->where('status', config('custom.user_status')['Active'])->pluck('id');
        if ($user && count($user) > 0) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}

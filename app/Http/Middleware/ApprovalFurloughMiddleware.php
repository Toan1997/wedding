<?php

namespace App\Http\Middleware;

use App\Models\Furlough;
use Closure;
use Illuminate\Http\Request;

class ApprovalFurloughMiddleware
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
        $url = url()->current();
        $arrUrl = explode('/', $url);
        if (end($arrUrl) > 0) {
            $furlough = Furlough::findOrFail(end($arrUrl));
            if (!$furlough->approved_at) {
                return $next($request);
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }
}

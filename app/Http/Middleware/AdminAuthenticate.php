<?php
/**
 * Created by PhpStorm.
 * User: polik
 * Date: 30.10.16
 * Time: 23:08
 */

namespace app\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $auth = Auth::guard($guard);
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }
        if (! $auth->user()->isRole('Admin')) {
            return response('Access denied.', 401);
        }

        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // 檢查使用者是否已登入
        if (!$request->user()) {
            return redirect('login'); // 或返回錯誤訊息
        }

        // 檢查使用者角色是否在允許的角色列表中
        if (!in_array($request->user()->role, $roles)) {
            abort(403);
        }

        return $next($request);
    }
}

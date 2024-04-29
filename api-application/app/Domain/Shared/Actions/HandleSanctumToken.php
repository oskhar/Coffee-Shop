<?php

namespace Domain\Shared\Actions;

use Closure;
use Domain\Shared\Exceptions\UnauthorizedException;
use Domain\Shared\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HandleSanctumToken
{

    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            UnauthorizedException::handle();
        }

        $user = User::whereHas('tokens');

        // if () {
        //     UnauthorizedException::handle();
        // }

        return $next($request);
    }
}

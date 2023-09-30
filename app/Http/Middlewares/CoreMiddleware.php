<?php

namespace App\Http\Middlewares;

use Core\Middleware\Middleware;
use Core\Requests\IRequest;

class CoreMiddleware implements Middleware
{
    public final function handle(IRequest $request):bool
    {
        return true;
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController
{
    public function __invoke(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->to(RouteServiceProvider::HOME);
    }
}

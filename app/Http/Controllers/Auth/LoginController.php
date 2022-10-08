<?php

namespace App\Http\Controllers\Auth;

class LoginController extends \Aut\VueDashboard\Controllers\Auth\LoginController
{
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }
}

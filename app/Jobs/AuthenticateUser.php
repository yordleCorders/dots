<?php

namespace App\Jobs;

use App\Jobs\Job;
use Auth;
use Illuminate\Contracts\Bus\SelfHandling;

class AuthenticateUser extends Job implements SelfHandling
{
    protected $credentials = [];
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($credentials = [])
    {
        $this->credentials = $credentials;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->authenticates($this->credentials)) {
            return Auth::user();
        }

        return $this->failAuthentication();
    }

    private function authenticates($credentials)
    {
        if (array_key_exists('remember', $credentials)) {
            $remember = $credentials['remember'];
        }

        $remember = '';

        if (Auth::attempt($credentials, $remember)) {
            return (bool) true;
        }

        return (bool) false;
    }

    private function failAuthentication()
    {
        return response('Unauthorized', 401);
    }
}

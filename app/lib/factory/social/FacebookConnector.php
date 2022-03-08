<?php

namespace App\lib\factory\social;

use Illuminate\Support\Facades\Log;

/**
 * This Concrete Product implements the Facebook API.
 */
class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        Log::info("FacebookConnector logIn() Send HTTP API request to log in user $this->login with " . "password $this->password");
    }

    public function logOut(): void
    {
        Log::info(" FacebookConnector logOut() Send HTTP API request to log out user $this->login");
    }

    public function createPost($content): void
    {
       Log::info("FacebookConnector createPost() Send HTTP API requests to create a post in Facebook timeline " . $content);
    }
}

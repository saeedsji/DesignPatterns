<?php

namespace App\lib\factory\social;

use Illuminate\Support\Facades\Log;

/**
 * This Concrete Product implements the LinkedIn API.
 */
class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        Log::info("LinkedInConnector logIn() Send HTTP API request to log in user $this->email with " . "password $this->password");
    }

    public function logOut(): void
    {
        Log::info("LinkedInConnector logOut() Send HTTP API request to log out user $this->email");
    }

    public function createPost($content): void
    {
        Log::info("LinkedInConnector createPost() createPost Send HTTP API requests to create a post in LinkedIn timeline ".$content);
    }
}

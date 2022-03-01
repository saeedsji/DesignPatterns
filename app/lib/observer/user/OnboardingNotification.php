<?php

namespace App\lib\observer\user;

use Illuminate\Support\Facades\Log;

/**
 * This Concrete Component sends initial instructions to new users. The client
 * is responsible for attaching this component to a proper user creation event.
 */
class OnboardingNotification implements \SplObserver
{
    private $adminEmail;

    public function __construct($adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(\SplSubject $subject, string $event = null, $data = null): void
    {
        // mail($this->adminEmail,
        //     "Onboarding required",
        //     "We have a new user. Here's his info: " .json_encode($data));

        Log::info('OnboardingNotification: The notification has been emailed!');
    }
}

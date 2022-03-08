<?php

namespace App\lib\factory\social;

use Illuminate\Support\Facades\Log;

class RunSocial {

    public function run() {
       Log::alert("Testing ConcreteCreator1:");
        $this->clientCode(new FacebookPoster("john_smith", "******"));

        Log::alert("Testing ConcreteCreator2:");
        $this->clientCode(new LinkedInPoster("john_smith@example.com", "******"));
    }

    /**
     * The client code can work with any subclass of SocialNetworkPoster since it
     * doesn't depend on concrete classes.
     */
    function clientCode(SocialNetworkPoster $creator)
    {
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
    }

}

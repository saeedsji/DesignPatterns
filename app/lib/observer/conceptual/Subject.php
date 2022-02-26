<?php

namespace App\lib\observer\conceptual;

use Illuminate\Support\Facades\Log;
use SplObjectStorage;

class Subject implements SplSubject {
    /**
     * @var int For the sake of simplicity, the Subject's state, essential to
     * all subscribers, is stored in this variable.
     */
    public $state;

    /**
     * @var SplObjectStorage List of subscribers. In real life, the list of
     * subscribers can be stored more comprehensively (categorized by event
     * type, etc.).
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * The subscription management methods.
     */
    public function attach(SplObserver $observer): void
    {
        Log::alert('Subject: Attached an observer');
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
        Log::alert('Subject: Detached an observer');
    }

    /**
     * Trigger an update in each subscriber.
     */
    public function notify(): void
    {
        Log::alert('Subject: Notifying observers...');
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Usually, the subscription logic is only a fraction of what a Subject can
     * really do. Subjects commonly hold some important business logic, that
     * triggers a notification method whenever something important is about to
     * happen (or after it).
     */
    public function someBusinessLogic(): void
    {
        Log::alert("Subject: I'm doing something important in SubjectClass");
        $this->state = rand(0, 10);

        Log::alert("Subject: My state has just changed to: {$this->state}");
        $this->notify();
    }
}

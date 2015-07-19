<?php

namespace callebstrom\JPBundle\Events;
 
class JobEventListener
{
    public function onJobAborted(JobEvent $event) {
        return "Job aborted";
    }

    public function onJobSuspended(JobEvent $event) {
        return "Job suspended";
    }
}

?>
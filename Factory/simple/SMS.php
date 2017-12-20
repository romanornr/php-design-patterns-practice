<?php

class SMS extends Notifier
{
    public function validateTo(): bool
    {
        $pattern = '/^[0-9\-\(\)\/\+\s]*$/';
        $isPhone = preg_match($pattern, $this->to);

        return $isPhone ? true : false;
    }

    public function sendNotification(): string
    {
        if($this->validateTo() === false){
            throw new Exception("Invalid phone number");
        }
        $notificationType = get_class($this);
        //return "This is a ". $notificationType . " to " . $this->to . ".";
        return "{$this->to} hey";
    }
}
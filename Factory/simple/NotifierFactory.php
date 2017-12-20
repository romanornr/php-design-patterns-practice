<?php

class NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if(empty($notifier)){
            throw new Exception("No exception passed");
        }

        switch($notifier){
            case 'SMS':
                return new SMS($to);
                break;
            case 'Email':
                return new Email($to, 'Romano');
                break;
            default:
                throw new Exception("Notifier invalid");
                break;
        }
    }
}
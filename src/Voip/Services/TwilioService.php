<?php
/**
 * Twilio service
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Drupal\demo\Voip\Services;



class TwilioService  extends AbstractVoipBroadcastService
{
    public function broadcastVoiceMessage()
    {
        //do lots of thing to send a voice message and then
        //return following message

        return 'voice message is sent';
    }
}
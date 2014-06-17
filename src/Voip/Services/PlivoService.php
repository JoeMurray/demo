<?php
/**
 * Plivo Service
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Drupal\demo\Voip\Services;


class PlivoService  extends AbstractVoipBroadcastService
{

    public function broadcastVoiceMessage()
    {
        //do lots of thing to send a voice message and then
        //return following message

        return 'voice message is sent';
    }
}
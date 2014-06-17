<?php
/**
 * Plivo Service
 *
 *
 * @author: Eftakhairul Islam <eftakhairul@gmail.com>
 */

namespace Drupal\demo\Voip\Services;


abstract class AbstractVoipBroadcastService
{

    protected $voiceMessageFile;

    abstract public function broadcastVoiceMessage();


    public function getVoiceMessageFile()
    {
        return  $this->voiceMessageFile;
    }
}
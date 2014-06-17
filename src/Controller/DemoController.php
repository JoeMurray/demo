<?php
/**
 * @file
 * Contains \Drupal\demo\Controller\DemoController.
 */
 
namespace Drupal\demo\Controller;


use \Drupal\demo\Civicrm\DAO;
use \Drupal\demo\Civicrm\Form;
use \Drupal\demo\Voip\Services;


/**
 * DemoController.
 */
class DemoController {
  /**
   * Generates an example page.
   */
  public function demo() {

       $form        = new Form\Mockup();
       $entity      = new DAO\VoiceEntity();
       $voipservice = new Services\PlivoService();

       $content   = $form->getForm(). PHP_EOL;
       $content .= $entity->getData() . PHP_EOL;
       $content .= $voipservice->broadcastVoiceMessage(). PHP_EOL;

    return array(
      '#markup' => t($content),
    );
  }     
}
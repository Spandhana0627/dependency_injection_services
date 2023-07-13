<?php


namespace Drupal\dependency_injection_services\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;


class CustomBlock extends BlockBase {

 
  public function build() {
    $data = \Drupal::service('dependency_injection_services.dbinsert')->getData();
    return [
      '#theme' => 'my_template',
      '#data' => $data,
    ];
   }
}
?>
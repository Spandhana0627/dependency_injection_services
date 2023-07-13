<?php

namespace Drupal\dependency_injection_services\services;

use Drupal\core\Database\connection;

class Db_insert{
    protected $database;
    public function __construct(connection $database){
      $this->database = $database;  
    }

    /**
     * set Data function
     */

     public function setData($form_state){
        $htis->database->insert('customform')
        ->fields(array(
            'mail' => $form_state->getValue('mail'),
            'name' => $form_state->getValue('name'),
        ))
        ->execute();
     }


     /**
      * get Data function
      */
      public function getData(){
        $query = $this->database->select('customform','cf');
        $query->fields('cf');
        $result = $query->execute()->fetchAll();
        return $result;
     }
}
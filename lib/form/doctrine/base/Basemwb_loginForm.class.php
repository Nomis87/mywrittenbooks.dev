<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Basemwb_loginForm extends BaseFormDoctrine{
  
  public function configure() {
    
    $this->setWidgets(array(
        
        'eMail'     => new sfWidgetFormInputText(),
        'password'  => new sfWidgetFormInputText()
    ));
     
  }
  
}
?>

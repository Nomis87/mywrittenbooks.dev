<?php

/**
 * mwb_admin form base class.
 *
 * @method mwb_admin getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_adminForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'generated_at' => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'admin_id'     => new sfWidgetFormInputHidden(),
      'firstname'    => new sfWidgetFormInputText(),
      'lastname'     => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'username'     => new sfWidgetFormInputText(),
      'password'     => new sfWidgetFormInputText(),
      'picturepath'  => new sfWidgetFormInputText(),
      'superadmin'   => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'generated_at' => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'admin_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('admin_id')), 'empty_value' => $this->getObject()->get('admin_id'), 'required' => false)),
      'firstname'    => new sfValidatorString(array('max_length' => 40)),
      'lastname'     => new sfValidatorString(array('max_length' => 20)),
      'email'        => new sfValidatorString(array('max_length' => 40)),
      'username'     => new sfValidatorString(array('max_length' => 20)),
      'password'     => new sfValidatorString(array('max_length' => 40)),
      'picturepath'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'superadmin'   => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mwb_admin[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_admin';
  }

}

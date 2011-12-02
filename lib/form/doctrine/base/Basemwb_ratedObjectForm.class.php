<?php

/**
 * mwb_ratedObject form base class.
 *
 * @method mwb_ratedObject getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_ratedObjectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ratedObject_id' => new sfWidgetFormInputHidden(),
      'book'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ratedObject_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ratedObject_id')), 'empty_value' => $this->getObject()->get('ratedObject_id'), 'required' => false)),
      'book'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('mwb_rated_object[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_ratedObject';
  }

}

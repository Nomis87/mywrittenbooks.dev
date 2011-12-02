<?php

/**
 * mwb_boughtObject form base class.
 *
 * @method mwb_boughtObject getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_boughtObjectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'buydobject_id' => new sfWidgetFormInputHidden(),
      'user'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'), 'add_empty' => false)),
      'object'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_object'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'buydobject_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('buydobject_id')), 'empty_value' => $this->getObject()->get('buydobject_id'), 'required' => false)),
      'user'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'))),
      'object'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_object'))),
    ));

    $this->widgetSchema->setNameFormat('mwb_bought_object[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_boughtObject';
  }

}

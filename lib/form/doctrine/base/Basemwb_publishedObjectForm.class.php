<?php

/**
 * mwb_publishedObject form base class.
 *
 * @method mwb_publishedObject getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_publishedObjectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'publishedobject_id' => new sfWidgetFormInputHidden(),
      'object'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_object'), 'add_empty' => false)),
      'user'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'publishedobject_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('publishedobject_id')), 'empty_value' => $this->getObject()->get('publishedobject_id'), 'required' => false)),
      'object'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_object'))),
      'user'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'))),
    ));

    $this->widgetSchema->setNameFormat('mwb_published_object[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_publishedObject';
  }

}

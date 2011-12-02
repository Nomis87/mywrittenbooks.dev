<?php

/**
 * mwb_object form base class.
 *
 * @method mwb_object getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_objectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'object_id'    => new sfWidgetFormInputHidden(),
      'generated_at' => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'title'        => new sfWidgetFormInputText(),
      'sites'        => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'price'        => new sfWidgetFormInputText(),
      'writer'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'), 'add_empty' => false)),
      'picture'      => new sfWidgetFormInputText(),
      'documentpath' => new sfWidgetFormInputText(),
      'genre'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_genre'), 'add_empty' => false)),
      'language'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_language'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'object_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('object_id')), 'empty_value' => $this->getObject()->get('object_id'), 'required' => false)),
      'generated_at' => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'sites'        => new sfValidatorInteger(array('required' => false)),
      'description'  => new sfValidatorString(array('max_length' => 4000)),
      'price'        => new sfValidatorNumber(),
      'writer'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'))),
      'picture'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'documentpath' => new sfValidatorString(array('max_length' => 255)),
      'genre'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_genre'))),
      'language'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_language'))),
    ));

    $this->widgetSchema->setNameFormat('mwb_object[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_object';
  }

}

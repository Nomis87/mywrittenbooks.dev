<?php

/**
 * mwb_publishedObject filter form base class.
 *
 * @package    mywrittenbooks.dev
 * @subpackage filter
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basemwb_publishedObjectFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'object'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_object'), 'add_empty' => true)),
      'user'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'object'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_object'), 'column' => 'object_id')),
      'user'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_user'), 'column' => 'user_id')),
    ));

    $this->widgetSchema->setNameFormat('mwb_published_object_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_publishedObject';
  }

  public function getFields()
  {
    return array(
      'publishedobject_id' => 'Number',
      'object'             => 'ForeignKey',
      'user'               => 'ForeignKey',
    );
  }
}

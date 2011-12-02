<?php

/**
 * mwb_boughtObject filter form base class.
 *
 * @package    mywrittenbooks.dev
 * @subpackage filter
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basemwb_boughtObjectFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'), 'add_empty' => true)),
      'object'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_object'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_user'), 'column' => 'user_id')),
      'object'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_object'), 'column' => 'object_id')),
    ));

    $this->widgetSchema->setNameFormat('mwb_bought_object_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_boughtObject';
  }

  public function getFields()
  {
    return array(
      'buydobject_id' => 'Number',
      'user'          => 'ForeignKey',
      'object'        => 'ForeignKey',
    );
  }
}

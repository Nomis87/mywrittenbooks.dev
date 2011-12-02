<?php

/**
 * mwb_language filter form base class.
 *
 * @package    mywrittenbooks.dev
 * @subpackage filter
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basemwb_languageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'shortcut'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'country'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'netsuffix'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'shortcut'    => new sfValidatorPass(array('required' => false)),
      'country'     => new sfValidatorPass(array('required' => false)),
      'netsuffix'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mwb_language_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_language';
  }

  public function getFields()
  {
    return array(
      'language_id' => 'Number',
      'shortcut'    => 'Text',
      'country'     => 'Text',
      'netsuffix'   => 'Text',
    );
  }
}

<?php

/**
 * mwb_object filter form base class.
 *
 * @package    mywrittenbooks.dev
 * @subpackage filter
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basemwb_objectFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'generated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'title'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sites'        => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'price'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'writer'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_user'), 'add_empty' => true)),
      'picture'      => new sfWidgetFormFilterInput(),
      'documentpath' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genre'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_genre'), 'add_empty' => true)),
      'language'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_language'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'generated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'title'        => new sfValidatorPass(array('required' => false)),
      'sites'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'  => new sfValidatorPass(array('required' => false)),
      'price'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'writer'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_user'), 'column' => 'user_id')),
      'picture'      => new sfValidatorPass(array('required' => false)),
      'documentpath' => new sfValidatorPass(array('required' => false)),
      'genre'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_genre'), 'column' => 'genre_id')),
      'language'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_language'), 'column' => 'language_id')),
    ));

    $this->widgetSchema->setNameFormat('mwb_object_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_object';
  }

  public function getFields()
  {
    return array(
      'object_id'    => 'Number',
      'generated_at' => 'Date',
      'updated_at'   => 'Date',
      'title'        => 'Text',
      'sites'        => 'Number',
      'description'  => 'Text',
      'price'        => 'Number',
      'writer'       => 'ForeignKey',
      'picture'      => 'Text',
      'documentpath' => 'Text',
      'genre'        => 'ForeignKey',
      'language'     => 'ForeignKey',
    );
  }
}

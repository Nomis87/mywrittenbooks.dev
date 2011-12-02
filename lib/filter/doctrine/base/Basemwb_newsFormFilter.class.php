<?php

/**
 * mwb_news filter form base class.
 *
 * @package    mywrittenbooks.dev
 * @subpackage filter
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basemwb_newsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'writer'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_admin'), 'add_empty' => true)),
      'date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'news'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'   => new sfValidatorPass(array('required' => false)),
      'writer'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('mwb_admin'), 'column' => 'admin_id')),
      'date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'news'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mwb_news_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_news';
  }

  public function getFields()
  {
    return array(
      'news_id' => 'Number',
      'title'   => 'Text',
      'writer'  => 'ForeignKey',
      'date'    => 'Date',
      'news'    => 'Text',
    );
  }
}

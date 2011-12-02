<?php

/**
 * mwb_admin filter form base class.
 *
 * @package    mywrittenbooks.dev
 * @subpackage filter
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basemwb_adminFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'generated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'firstname'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'picturepath'  => new sfWidgetFormFilterInput(),
      'superadmin'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'generated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'firstname'    => new sfValidatorPass(array('required' => false)),
      'lastname'     => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'username'     => new sfValidatorPass(array('required' => false)),
      'password'     => new sfValidatorPass(array('required' => false)),
      'picturepath'  => new sfValidatorPass(array('required' => false)),
      'superadmin'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('mwb_admin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_admin';
  }

  public function getFields()
  {
    return array(
      'generated_at' => 'Date',
      'updated_at'   => 'Date',
      'admin_id'     => 'Number',
      'firstname'    => 'Text',
      'lastname'     => 'Text',
      'email'        => 'Text',
      'username'     => 'Text',
      'password'     => 'Text',
      'picturepath'  => 'Text',
      'superadmin'   => 'Boolean',
    );
  }
}

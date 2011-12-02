<?php

/**
 * mwb_language form base class.
 *
 * @method mwb_language getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_languageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'language_id' => new sfWidgetFormInputHidden(),
      'shortcut'    => new sfWidgetFormInputText(),
      'country'     => new sfWidgetFormInputText(),
      'netsuffix'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'language_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('language_id')), 'empty_value' => $this->getObject()->get('language_id'), 'required' => false)),
      'shortcut'    => new sfValidatorString(array('max_length' => 10)),
      'country'     => new sfValidatorString(array('max_length' => 60)),
      'netsuffix'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mwb_language[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_language';
  }

}

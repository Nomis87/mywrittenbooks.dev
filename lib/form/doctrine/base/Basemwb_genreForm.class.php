<?php

/**
 * mwb_genre form base class.
 *
 * @method mwb_genre getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_genreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'genre_id' => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'genre_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('genre_id')), 'empty_value' => $this->getObject()->get('genre_id'), 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'mwb_genre', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('mwb_genre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_genre';
  }

}

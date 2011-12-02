<?php

/**
 * mwb_news form base class.
 *
 * @method mwb_news getObject() Returns the current form's model object
 *
 * @package    mywrittenbooks.dev
 * @subpackage form
 * @author     Tobias Simon
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basemwb_newsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'news_id' => new sfWidgetFormInputHidden(),
      'title'   => new sfWidgetFormInputText(),
      'writer'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_admin'), 'add_empty' => true)),
      'date'    => new sfWidgetFormDateTime(),
      'news'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'news_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('news_id')), 'empty_value' => $this->getObject()->get('news_id'), 'required' => false)),
      'title'   => new sfValidatorPass(),
      'writer'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('mwb_admin'), 'required' => false)),
      'date'    => new sfValidatorDateTime(array('required' => false)),
      'news'    => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('mwb_news[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mwb_news';
  }

}

<?php

/**
 * object actions.
 *
 * @package    mywrittenbooks.dev
 * @subpackage object
 * @author     Tobias Simon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class objectActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mwb_objects = Doctrine_Core::getTable('mwb_object')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->mwb_object = Doctrine_Core::getTable('mwb_object')->find(array($request->getParameter('object_id')));
    $this->forward404Unless($this->mwb_object);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new mwb_objectForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new mwb_objectForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mwb_object = Doctrine_Core::getTable('mwb_object')->find(array($request->getParameter('object_id'))), sprintf('Object mwb_object does not exist (%s).', $request->getParameter('object_id')));
    $this->form = new mwb_objectForm($mwb_object);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mwb_object = Doctrine_Core::getTable('mwb_object')->find(array($request->getParameter('object_id'))), sprintf('Object mwb_object does not exist (%s).', $request->getParameter('object_id')));
    $this->form = new mwb_objectForm($mwb_object);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mwb_object = Doctrine_Core::getTable('mwb_object')->find(array($request->getParameter('object_id'))), sprintf('Object mwb_object does not exist (%s).', $request->getParameter('object_id')));
    $mwb_object->delete();

    $this->redirect('object/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mwb_object = $form->save();

      $this->redirect('object/edit?object_id='.$mwb_object->getObjectId());
    }
  }
}

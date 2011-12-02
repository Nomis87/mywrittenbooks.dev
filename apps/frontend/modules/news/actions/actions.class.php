<?php

/**
 * news actions.
 *
 * @package    mywrittenbooks.dev
 * @subpackage news
 * @author     Tobias Simon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mwb_newss = Doctrine_Core::getTable('mwb_news')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->mwb_news = Doctrine_Core::getTable('mwb_news')->find(array($request->getParameter('news_id')));
    $this->forward404Unless($this->mwb_news);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new mwb_newsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new mwb_newsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mwb_news = Doctrine_Core::getTable('mwb_news')->find(array($request->getParameter('news_id'))), sprintf('Object mwb_news does not exist (%s).', $request->getParameter('news_id')));
    $this->form = new mwb_newsForm($mwb_news);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mwb_news = Doctrine_Core::getTable('mwb_news')->find(array($request->getParameter('news_id'))), sprintf('Object mwb_news does not exist (%s).', $request->getParameter('news_id')));
    $this->form = new mwb_newsForm($mwb_news);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mwb_news = Doctrine_Core::getTable('mwb_news')->find(array($request->getParameter('news_id'))), sprintf('Object mwb_news does not exist (%s).', $request->getParameter('news_id')));
    $mwb_news->delete();

    $this->redirect('news/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mwb_news = $form->save();

      $this->redirect('news/edit?news_id='.$mwb_news->getNewsId());
    }
  }
}

<?php

/**
 * login actions.
 *
 * @package    mywrittenbooks.dev
 * @subpackage login
 * @author     Tobias Simon
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $request->getContent();
//     $this->form = new mwb_loginForm();
  }
}

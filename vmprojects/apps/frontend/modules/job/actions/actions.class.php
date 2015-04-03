<?php

/**
 * job actions.
 *
 * @package    vmtest
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->vmtest_jobs = Doctrine_Core::getTable('VmtestJob')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->vmtest_job = Doctrine_Core::getTable('VmtestJob')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->vmtest_job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new VmtestJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VmtestJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($vmtest_job = Doctrine_Core::getTable('VmtestJob')->find(array($request->getParameter('id'))), sprintf('Object vmtest_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new VmtestJobForm($vmtest_job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vmtest_job = Doctrine_Core::getTable('VmtestJob')->find(array($request->getParameter('id'))), sprintf('Object vmtest_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new VmtestJobForm($vmtest_job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vmtest_job = Doctrine_Core::getTable('VmtestJob')->find(array($request->getParameter('id'))), sprintf('Object vmtest_job does not exist (%s).', $request->getParameter('id')));
    $vmtest_job->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vmtest_job = $form->save();

      $this->redirect('job/edit?id='.$vmtest_job->getId());
    }
  }
}

<?php

/**
 * VmtestCategory form base class.
 *
 * @method VmtestCategory getObject() Returns the current form's model object
 *
 * @package    vmtest
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVmtestCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'name'                   => new sfWidgetFormInputText(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
      'vmtest_affiliates_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'VmtestAffiliate')),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 255)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
      'vmtest_affiliates_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'VmtestAffiliate', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'VmtestCategory', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('vmtest_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VmtestCategory';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['vmtest_affiliates_list']))
    {
      $this->setDefault('vmtest_affiliates_list', $this->object->VmtestAffiliates->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveVmtestAffiliatesList($con);

    parent::doSave($con);
  }

  public function saveVmtestAffiliatesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['vmtest_affiliates_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->VmtestAffiliates->getPrimaryKeys();
    $values = $this->getValue('vmtest_affiliates_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('VmtestAffiliates', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('VmtestAffiliates', array_values($link));
    }
  }

}

<?php
class Tb963_CustomMail_Block_Adminhtml_Order_View_Tab_Contents
	extends Mage_Adminhtml_Block_Template
	implements Mage_Adminhtml_Block_Widget_Tab_Interface
{    
	public function _construct()
	{
		parent::_construct();
		$this->setTemplate('tb963/custommail/order/view/tab/contents.phtml');

	}

	public function getTabLabel() {
		return $this->__('Custom Mail');
	}

	public function getTabTitle() {
		return $this->__('Custom Mail');
	}

	public function canShowTab() {
		return true;
	}

	public function isHidden() {
		return false;
	}

	public function getOrder(){
		return Mage::registry('current_order');
	}

	public function getItemsCollection()
	{
		return $this->getOrder()->getItemsCollection();
	}

	public function getSku()
	{
		return $this->getItem()->getSku();
	}

	public function getQty()
	{
		return $this->getItem()->getQty();
	}
}
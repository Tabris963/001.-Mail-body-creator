<?php
class Tb963_CustomMail_Block_Sales_Order_View_Custom extends Mage_Core_Block_Template
{
	public function getOrder()
	{
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
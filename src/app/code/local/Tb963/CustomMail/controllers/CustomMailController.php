<?php
class Tb963_CustomMail_CustomMailController extends Mage_Adminhtml_Controller_Action {        
    
    public function indexAction()
    {

    }

    public function commentAction()
    {
    	$orderID=$_GET['orderID'];
        $supplier=$_GET['supplier'];
        $_order = Mage::getModel('sales/order')->load($orderID);
        $_order->addStatusToHistory($_order->getStatus(), 'Ordered placed with: '.$supplier, false);
        $_order->save();
    }
}
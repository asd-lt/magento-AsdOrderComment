<?php
class Asd_OrderComment_Helper_OrderComment extends Mage_Core_Helper_Abstract
{
    public function setOrderComment($observer)
    {
        $orderComment = trim($this->_getRequest()->getPost('orderComment', false));
        if ($orderComment != '') {
            $observer->getEvent()->getOrder()->addStatusToHistory('Pending', $orderComment, false);
        }
    }
}
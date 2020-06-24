<?php

namespace NgocThanh\Module\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class GetForm extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
    public function getUrl()
    {
        return $this->getRequest()->getParams();
    }
    public function execute()
    {

//        var_dump($this->getUrl());
//        $objeect ={};
//        $object->setTest('121212');
//        return $object;
        $this->_redirect("module/index/test");
        return $this->_pageFactory->create();
    }
}
?>

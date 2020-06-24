<?php

namespace  NgocThanh\Module\Controller\TestModel;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class TestLayout extends \Magento\Framework\App\Action\Action
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
    public function execute()
    {
//        var_dump($this->getRequest()->getParams());
        return $this->_pageFactory->create();
        // TODO: Implement execute() method.
    }

}
?>

<?php

namespace NgocThanh\Module\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Form extends \Magento\Backend\App\Action
{
    protected $_pageFactory;
    public function __construct(
        Action\Context $context,
        PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}

<?php

namespace NgocThanh\Module\Controller\TestModel;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package NgocThanh\Module\Controller\TestModel
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;
    protected $_siteMapFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        \NgocThanh\Module\Model\SiteMapFactory $siteMapFactory
    )
    {
        $this->_siteMapFactory = $siteMapFactory;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $siteMap = $this->_siteMapFactory->create();
        $siteMapCollection = $siteMap->getCollection();
        var_dump($siteMapCollection->getData());
        return $this->_pageFactory->create();
        // TODO: Implement execute() method.
    }
}

?>

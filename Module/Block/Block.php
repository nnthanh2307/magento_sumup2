<?php

namespace NgocThanh\Module\Block;

use Magento\Framework\View\Element\Template;

class Block extends \Magento\Framework\View\Element\Template
{
    protected $_siteMapFactory;

    public function __construct(
        Template\Context $context,
        \NgocThanh\Module\Model\SiteMapFactory $siteMapFactory
    )
    {
      $this->_siteMapFactory = $siteMapFactory;
        parent::__construct($context);
    }
    public function getCompany()
    {
        return "Smart OSC";
    }
    public function returnURL()
    {
        return $this->getUrl("module\index\getform");
    }
    public function returnData()
    {
        $this->getLayout()->createBlock("NgocThanh\Module\Block\Block")->setTemplate();
    }


    public function SiteMap()
    {
        $siteMap = $this->_siteMapFactory->create();
        $siteMapCollection = $siteMap->getCollection();
//        var_dump($siteMapCollection->getData());
        return $siteMapCollection->getData();

    }
}
?>


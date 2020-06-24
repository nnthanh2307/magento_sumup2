<?php
namespace NgocThanh\Module\Model\ResourceModel;

class SiteMap extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init("sitemap","sitemap_id");
    }
}
?>

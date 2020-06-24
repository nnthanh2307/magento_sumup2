<?php
namespace NgocThanh\Module\Model\ResourceModel\SiteMap;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\NgocThanh\Module\Model\SiteMap::class, \NgocThanh\Module\Model\ResourceModel\SiteMap::class);
    }
}
?>

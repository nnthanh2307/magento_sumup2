<?php
namespace NgocThanh\Module\Model;

class SiteMap extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(\NgocThanh\Module\Model\ResourceModel\SiteMap::class);
    }
}

?>

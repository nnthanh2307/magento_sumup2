<?php

namespace NgocThanh\Module\Block;
use Magento\Framework\View\Element\Template;

class GetParam extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        die(__METHOD__);
        parent::__construct($context, $data);
    }
    public function returnUrl()
    {
        return $this->getUrl();
    }
}

?>

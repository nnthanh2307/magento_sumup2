<?php
namespace NgocThanh\Module\Block;

use Magento\Framework\View\Element\Template;

class Block2 extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
    public function getArray()
    {
        //get data from arguments in layout file;
        return $this->getData();
    }


    public function returnName()
    {
        return "Ngoc Thanh";
    }
}

?>

<?php
namespace Gta\Mymod\Block;
class Mymod extends \Magento\Framework\View\Element\Template
{
public function __construct(
\Magento\Backend\Block\Template\Context $context,
array $data = []
)
{
parent::__construct($context, $data);
}
public function getMymod()
{
return 'Module Created Successfully';
}
}
?>
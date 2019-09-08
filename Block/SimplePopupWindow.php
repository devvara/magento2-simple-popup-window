<?php
namespace Helper\SimplePopupWindow\Block;
/**
 * Class Popup
 * @package Helper\SimplePopupWindow\Block
 */
class SimplePopupWindow extends \Magento\Framework\View\Element\Template
{
    /**
     * @var SimplePopupWindowBlockId
     */
    const XML_SIMPLE_POPUP_WINDOW_BLOCK_ID = 'simplepopupwindow/general/block_id';

    /**
     * @var ScopeConfig
     */
    protected $_scopeConfig;

    /**
     * Popup constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * Get Width Popup Config
     *
     * @return array|mixed
     */
    public function getSimplePopupWindowBlockId()
    {
        return $this->_scopeConfig->getValue(self::XML_SIMPLE_POPUP_WINDOW_BLOCK_ID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}

<?php
namespace ValidAge\AgeVerificationPopup\Block;

// use \ValidAge\AgeVerificationPopup\Helper\Data;
use \Magento\Framework\View\Element\Template;

class AgeVerify extends Template
{
    protected $_scopeConfig;
    protected $helperData;

    const XML_PATH_AGE_VERIFICATION_PUBLIC_KEY	= 'ageverificationPopup_tab/ageverificationPopup_setting/ageverificationPopup_publicKey';


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \ValidAge\AgeVerificationPopup\Helper\Data $helperData,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig 

    ) 
    {

        parent::__construct($context);
        $this->helperData = $helperData;
        $this->_scopeConfig = $scopeConfig;
    }
    public function publicKey()
    {
        return $this->helperData->ageverification_publicKey();
    }
    public function getValuesConfig()
    {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFICATION_PUBLIC_KEY);
    }
}
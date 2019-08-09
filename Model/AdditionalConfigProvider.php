<?php
namespace ValidAge\AgeVerificationPopup\Model;

use \ValidAge\AgeVerificationCheckout\Helper\Data;

class AdditionalConfigProvider implements \Magento\Checkout\Model\ConfigProviderInterface
{
    protected $helper;
    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }
    public function getConfig()
    {
        $publuc_key = $this->helper->ageverification_publicKey();
        $output['cya_publicKey'] = $publuc_key;
        return $output;
    }
}
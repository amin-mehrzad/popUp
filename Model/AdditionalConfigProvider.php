<?php

namespace ValidAge\AgeVerificationPopup\Model;

use \ValidAge\AgeVerificationCheckout\Helper\Data;

class AdditionalConfigProvider implements \Magento\Checkout\Model\ConfigProviderInterface

{
    protected $helper;
    public function __construct(
        Data $helper
    ){
        $this->helper = $helper;    
    }
   public function getConfig()

   {
       // $secret_key= $this->helper->ageverification_secretKey();
        $publuc_key= $this->helper->ageverification_publicKey();
        //$output['cya_secretKey'] = $secret_key;
        $output['cya_publicKey'] = $publuc_key;
        //$output['cya_auth'] = null;

       return $output;
    //return [];
   }

}
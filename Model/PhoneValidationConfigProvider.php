<?php

namespace MatusStafura\PhoneValidation\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class PhoneValidationConfigProvider implements ConfigProviderInterface
{
    const XML_PATH_ENABLED = 'customer/phone_validation/enabled';

    protected ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getConfig(): array
    {
        return [
            'phoneValidation' => $this->scopeConfig->isSetFlag(self::XML_PATH_ENABLED)
        ];
    }
}

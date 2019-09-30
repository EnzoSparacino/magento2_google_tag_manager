<?php
/**
 * Google Tag Manager
 * Copyright (C) 2019 Sparacino
 * 
 * This file is part of Sparacino/GTM.
 * 
 * Sparacino/GTM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Sparacino\GTM\Helper;

use Magento\Store\Model\Store;
use Magento\Store\Model\ScopeInterface;

/**
 * GoogleAnalytics data helper
 *
 * @api
 * @since 100.0.2
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_ACTIVE = 'google/gtm/active';
    const XML_PATH_ACCOUNT = 'google/gtm/account';

    /**
     * Whether GTM is ready to use
     *
     * @param null|string|bool|int|Store $store
     * @return bool
     */
    public function isGoogleTagManagerAvailable($store = null)
    {
        $accountId = $this->scopeConfig->getValue(self::XML_PATH_ACCOUNT, ScopeInterface::SCOPE_STORE, $store);
        return $accountId && $this->scopeConfig->isSetFlag(self::XML_PATH_ACTIVE, ScopeInterface::SCOPE_STORE, $store);
    }

}

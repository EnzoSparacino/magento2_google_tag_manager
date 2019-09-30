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

namespace Sparacino\GTM\Block;

class Gtm extends \Magento\Framework\View\Element\Template
{
    /**
     * Sparacino GTM data
     *
     * @var \Sparacino\GTM\Helper\Data
     */
    protected $gtmData = null;
	
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param \Sparacino\GTM\Helper\Data  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
		\Sparacino\GTM\Helper\Data $gtmData,
        array $data = []
    ) {
		$this->gtmData = $gtmData;
        parent::__construct($context, $data);
    }
	
    /**
     * Get config
     *
     * @param string $path
     * @return mixed
     */
    public function getConfig($path)
    {
        return $this->_scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
	
    /**
     * Get Account Id
     *
     * @return string
     */	
	public function getGoogleTagManagerAccountId()
	{
		return $this->getConfig(\Sparacino\GTM\Helper\Data::XML_PATH_ACCOUNT);
	}
	
	
    /**
     * Render GTM tracking scripts
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->gtmData->isGoogleTagManagerAvailable()) {
            return '';
        }

        return parent::_toHtml();
    }	
}

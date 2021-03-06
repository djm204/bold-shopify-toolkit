<?php

namespace BoldApps\ShopifyToolkit\Contracts;

/**
 * Interface ShopClient.
 */
interface ShopBaseInfo
{
    /**
     * @return string
     */
    public function getMyShopifyDomain();

    /**
     * @return string
     */
    public function getDomain();
}

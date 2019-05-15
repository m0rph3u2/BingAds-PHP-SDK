<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a campaign level product scope with list of conditions that help determine whether a product from the Microsoft Merchant Center store gets served as a product ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/productscope?view=bingads-13 ProductScope Data Object
     * 
     * @uses ProductCondition
     */
    final class ProductScope extends Criterion
    {
        /**
         * A list of up to 7 product conditions that helps determine whether a product from the Microsoft Merchant Center store gets served as an ad.
         * @var ProductCondition[]
         */
        public $Conditions;
    }

}

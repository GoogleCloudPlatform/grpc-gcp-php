<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/recommendation_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\RecommendationTypeEnum;

/**
 * Types of recommendations.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.RecommendationTypeEnum.RecommendationType</code>
 */
class RecommendationType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Budget recommendation for budget constrained campaigns.
     *
     * Generated from protobuf enum <code>CAMPAIGN_BUDGET = 2;</code>
     */
    const CAMPAIGN_BUDGET = 2;
    /**
     * Keyword recommendation.
     *
     * Generated from protobuf enum <code>KEYWORD = 3;</code>
     */
    const KEYWORD = 3;
    /**
     * Recommendation to add a new text ad.
     *
     * Generated from protobuf enum <code>TEXT_AD = 4;</code>
     */
    const TEXT_AD = 4;
    /**
     * Recommendation to update a campaign to use a Target CPA bidding strategy.
     *
     * Generated from protobuf enum <code>TARGET_CPA_OPT_IN = 5;</code>
     */
    const TARGET_CPA_OPT_IN = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationType::class, \Google\Ads\GoogleAds\V0\Enums\RecommendationTypeEnum_RecommendationType::class);

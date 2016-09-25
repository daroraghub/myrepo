<?php

namespace Drupal\tek_master\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaPropertyBase;

/**
 * The basic "Twitter Ads" meta tag.
 *
 * @MetatagTag(
 *   id = "twitter_ads",
 *   label = @Translation("Twitter Ads"),
 *   description = @Translation("Track analytics of your own website."),
 *   name = "twitter:account_id",
 *   group = "other",
 *   weight = 1,
 *   type = "int",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class TwitterAds extends MetaPropertyBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}

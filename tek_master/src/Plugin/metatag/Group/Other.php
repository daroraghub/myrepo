<?php

namespace Drupal\tek_master\Plugin\metatag\Group;

use Drupal\metatag\Plugin\metatag\Group\GroupBase;

/**
 * The Other group.
 *
 * @MetatagGroup(
 *   id = "other",
 *   label = @Translation("Other"),
 *   description = @Translation("Other optional meta tags."),
 *   weight = 11
 * )
 */
class Other extends GroupBase {
  // Inherits everything from Base.
}

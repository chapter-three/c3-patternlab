<?php

namespace Drupal\fieldz_formatterz\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Extra field: Entity title.
 *
 * @ExtraFieldDisplay(
 *   id = "entity_title",
 *   label = @Translation("Entity title"),
 *   bundles = {
 *     "node.*",
 *     "media.*",
 *     "taxonomy_term.*",
 *     "block_content.*"
 *   }
 * )
 */
class EntityTitle extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $elements = [
      '#markup' => $entity->label(),
    ];

    return $elements;
  }

}

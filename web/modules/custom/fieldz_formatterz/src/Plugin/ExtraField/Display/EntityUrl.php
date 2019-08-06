<?php

namespace Drupal\fieldz_formatterz\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Extra field: Entity URL.
 *
 * @ExtraFieldDisplay(
 *   id = "entity_url",
 *   label = @Translation("Entity URL"),
 *   bundles = {
 *     "node.*",
 *     "taxonomy_term.*"
 *   }
 * )
 */
class EntityUrl extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $elements = [
      '#markup' => $entity->toUrl()->toString(),
    ];

    return $elements;
  }

}

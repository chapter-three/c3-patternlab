<?php

namespace Drupal\fieldz_formatterz\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Extra field: Link text for field_url.
 *
 * @ExtraFieldDisplay(
 *   id = "field_link_text",
 *   label = @Translation("Text for field_link"),
 *   bundles = {
 *     "node.*",
 *     "media.*",
 *     "paragraph.*",
 *     "taxonomy_term.*",
 *     "block_content.*"
 *   }
 * )
 */
class FieldLinkText extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $elements = '';

    if ($entity->hasField('field_link')) {
      $elements = [
        '#markup' => $entity->field_link->title,
      ];
    }

    return $elements;
  }

}

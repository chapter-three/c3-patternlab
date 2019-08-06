<?php

namespace Drupal\fieldz_formatterz\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;
use Drupal\Core\Url;

/**
 * Extra field: URL for field_url.
 *
 * @ExtraFieldDisplay(
 *   id = "field_link_url",
 *   label = @Translation("URL for field_link"),
 *   bundles = {
 *     "node.*",
 *     "paragraph.*",
 *     "media.*",
 *     "taxonomy_term.*",
 *     "block_content.*"
 *   }
 * )
 */
class FieldLinkUrl extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $elements = '';

    if ($entity->hasField('field_link')) {
      $url = $entity->field_link->first()->getUrl();

      if (!empty($url)) {
        $elements = [
          '#markup' => $url->toString(),
        ];
      }
    }

    return $elements;
  }

}

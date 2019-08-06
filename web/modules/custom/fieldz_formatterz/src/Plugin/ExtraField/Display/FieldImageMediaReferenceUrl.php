<?php

namespace Drupal\fieldz_formatterz\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;
use Drupal\image\Entity\ImageStyle;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "field_image_media_reference_url",
 *   label = @Translation("Image URL for <code>field_image</code>"),
 *   bundles = {
 *     "node.*",
 *     "paragraph.*"
 *   }
 * )
 */
class FieldImageMediaReferenceUrl extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $elements = '';

    if ($entity->hasField('field_image')) {
      $image = $entity->get('field_image')->entity;
      $url = ImageStyle::load('large')->buildUrl($image->field_media_image->entity->getFileUri());

      if (!empty($image)) {
        $elements = [
          '#markup' => file_url_transform_relative(file_create_url($url)),
        ];
      }
    }

    return $elements;
  }

}

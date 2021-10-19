<?php

namespace Drupal\custom_bootstrap_map\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use Drupal\Component\Serialization\Json;
use Drupal\media\Entity\Media;
use Drupal\file\Entity\File;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "block_custom_bootstrap_map",
 *   admin_label = @Translation("Custom Bootstrap: Map")
 * )
 */
class custombootstrapmapBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    $places = [];
    $categories = [];

    $vid = 'tool_category';
    $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);
    foreach ($terms as $term) {
      $term_obj = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($term->tid);
      $url = file_create_url($term_obj->get('field_image')->entity->getFileUri());

      $categories[] = [
        'cat_name' => $term->name,
        'cat_image' => $url
      ];
    }

    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'location');
    $locations = $query->execute();
    foreach ($locations as $key => $value) {
      $location = Node::load($value);

      $places[] = [
        'location_title' => $location->getTitle(),
        'location_slug' => $location->toUrl()->toString()
      ];
    }

    return [
      '#theme' => 'custom_bootstrap_map',
      '#locations' => $places,
      '#tools' => $categories,
      '#attached' => [
        'library' => [
          'custom_bootstrap_map/custom_bootstrap_map'
        ],
      ],
    ];
  }
}
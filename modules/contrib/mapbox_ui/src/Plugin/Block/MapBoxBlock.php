<?php

namespace Drupal\mapbox_ui\Plugin\Block;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides Mapbox block.
 *
 * @Block(
 *   id = "mapbox_ui_block",
 *   admin_label = @Translation("Mapbox block"),
 * )
 */
class MapBoxBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * MapBoxBlock construct.
   *
   * @param array $configuration
   *   Configuration array.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   A config factory instance.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ConfigFactoryInterface $config_factory) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritDoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
          $configuration,
          $plugin_id,
          $plugin_definition,
          $container->get('config.factory')
        );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $config = $this->configFactory->get('mapbox_ui.settings');
    $build['#theme'] = 'mapbox_ui_block';
    $build['#attached']['library'][] = 'mapbox_ui/mapbox_ui';
    $build['#attached']['drupalSettings']['accessToken'] = $config->get('accessToken');
    $build['#attached']['drupalSettings']['style'] = $config->get('style');
    $build['#attached']['drupalSettings']['center']['longitude'] = $config->get('longitude');
    $build['#attached']['drupalSettings']['center']['latitude'] = $config->get('latitude');
    $build['#attached']['drupalSettings']['marker']['markerLongitude'] = $config->get('markerLongitude');
    $build['#attached']['drupalSettings']['marker']['markerLatitude'] = $config->get('markerLatitude');
    $build['#attached']['drupalSettings']['popupText'] = $config->get('popupText');
    $build['#attached']['drupalSettings']['zoom'] = $config->get('zoom');
    $build['#attached']['drupalSettings']['navigationControl'] = $config->get('navigationControl');

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['mapbox_settings'] = $form_state->getValue('mapbox_settings');
  }

}

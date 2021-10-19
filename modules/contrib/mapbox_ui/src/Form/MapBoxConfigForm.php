<?php

namespace Drupal\mapbox_ui\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class mapBoxConfigForm.
 *
 * @internal
 */
class MapBoxConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mapbox_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);

    $this->messenger()
      ->addStatus($this->t('If you want to use Mapbox_ui please create an access token and a map style by going to <a href=":page"> MapBox Site</a>.', [':page' => 'https://www.mapbox.com/']));

    $config = $this->config('mapbox_ui.settings');

    $form['access_token'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Access Token'),
      '#default_value' => $config->get('accessToken'),
      '#required' => TRUE,
    ];
    $form['style'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Style'),
      '#default_value' => $config->get('style'),
      '#required' => TRUE,
    ];
    $form['center'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Center'),
    ];
    $form['center']['longitude'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Longitude'),
      '#default_value' => $config->get('longitude'),
    ];
    $form['center']['latitude'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Latitude'),
      '#default_value' => $config->get('latitude'),
    ];
    $form['marker'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Marker'),
    ];
    $form['marker']['marker_longitude'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Longitude'),
      '#default_value' => $config->get('markerLongitude'),
    ];
    $form['marker']['marker_latitude'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Latitude'),
      '#default_value' => $config->get('markerLatitude'),
    ];
    $form['popup_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Marker description'),
      '#default_value' => $config->get('popupText'),
    ];
    $form['zoom'] = [
      '#type' => 'number',
      '#title' => $this->t('Zoom'),
      '#default_value' => $config->get('zoom'),
    ];
    $form['navigation_control'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Active Navigation Control'),
      '#default_value' => $config->get('navigationControl'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('mapbox_ui.settings');
    $config->set('accessToken', $form_state->getValue('access_token'));
    $config->set('style', $form_state->getValue('style'));
    $config->set('longitude', $form_state->getValue('longitude'));
    $config->set('latitude', $form_state->getValue('latitude'));
    $config->set('markerLongitude', $form_state->getValue('marker_longitude'));
    $config->set('markerLatitude', $form_state->getValue('marker_latitude'));
    $config->set('popupText', $form_state->getValue('popup_text'));
    $config->set('zoom', $form_state->getValue('zoom'));
    $config->set('  navigationControl', $form_state->getValue('navigation_control'));
    $config->save();
    return parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'mapbox_ui.settings',
    ];
  }

}

<?php

namespace Drupal\ds\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Configures token fields.
 */
class TokenFieldForm extends FieldFormBase {

  /**
   * The type of the dynamic ds field.
   */
  const TYPE = 'token';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ds_field_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $field_key = '') {
    $form = parent::buildForm($form, $form_state, $field_key);
    $field = $this->field;

    $form['content'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Field content'),
      '#default_value' => $field['properties']['content']['value'] ?? '',
      '#format' => $field['properties']['content']['format'] ?? 'plain_text',
      '#base_type' => 'textarea',
      '#required' => TRUE,
    ];

    // Token support.
    if (\Drupal::moduleHandler()->moduleExists('token')) {
      $form['tokens'] = [
        '#title' => $this->t('Tokens'),
        '#type' => 'container',
        '#states' => [
          'invisible' => [
            'input[name="use_token"]' => ['checked' => FALSE],
          ],
        ],
      ];
      $form['tokens']['help'] = [
        '#theme' => 'token_tree_link',
        '#token_types' => 'all',
        '#global_types' => FALSE,
        '#dialog' => TRUE,
      ];
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getProperties(FormStateInterface $form_state) {
    return [
      'content' => $form_state->getValue('content'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getType() {
    return TokenFieldForm::TYPE;
  }

  /**
   * {@inheritdoc}
   */
  public function getTypeLabel() {
    return 'Token field';
  }

}

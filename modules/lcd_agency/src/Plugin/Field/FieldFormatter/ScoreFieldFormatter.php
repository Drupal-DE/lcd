<?php

namespace Drupal\lcd_agency\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'Agency numeric score' formatter.
 *
 * @FieldFormatter(
 *   id = "agency_numeric_score",
 *   label = @Translation("Agency numeric score"),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class ScoreFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Display agency quality score as number');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    return ($items) ? [0 => ['#markup' => count($items)]] : [];
  }

}

<?php

namespace Drupal\search_result\Plugin\views\area;

use Drupal\Core\Form\FormStateInterface;
use Drupal\devel\Plugin\Devel\Dumper\Kint;
use Drupal\views\Plugin\views\area\AreaPluginBase;
use Drupal\views\Plugin\views\style\DefaultSummary;
use Symfony\Component\HttpFoundation\Request;

/**
 * Views area handler to display some configurable result summary.
 *
 * @ingroup views_area_handlers
 *
 * @ViewsArea("search_result")
 */
class SearchResult extends AreaPluginBase
{
    /**
     * {@inheritdoc}
     */
    protected function defineOptions()
    {
        $options = parent::defineOptions();

        $options['content'] = [
            'default' => $this->t('Displaying @start - @end of @total'),
        ];

        return $options;
    }

    /**
     * {@inheritdoc}
     */
    public function buildOptionsForm(&$form, FormStateInterface $form_state)
    {
        parent::buildOptionsForm($form, $form_state);
        $item_list = [
            '#theme' => 'item_list',
            '#items' => ['@search_value -- search value of input'],
        ];
        $list = \Drupal::service('renderer')->render($item_list);
        $form['content'] = [
            '#title' => $this->t('Display'),
            '#type' => 'textarea',
            '#rows' => 3,
            '#default_value' => $this->options['content'],
            '#description' =>
                $this->t(
                    'You may use HTML code in this field. The following tokens are supported:'
                ) . $list,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        if (strpos($this->options['content'], '@total') !== false) {
            $this->view->get_total_rows = true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function render($empty = false)
    {
        // Must have options and does not work on summaries.
        if (
            !isset($this->options['content']) ||
            $this->view->style_plugin instanceof DefaultSummary
        ) {
            return [];
        }
        $output = '';
        $format = $this->options['content'];

        // Calculate the page totals.

        $total = $this->view->total_rows ?? count($this->view->result);

        $request = Request::createFromGlobals();
        $searchVal = $request->request->get('search_api_fulltext');
        // var_dump($searchVal);

        // Get the search information.
        $replacements = [];
        $replacements['@total'] = $total;
        $replacements['@search_value'] = $searchVal;

        // Send the output.
        if (!empty($total) || !empty($this->options['empty'])) {
            $output .= str_replace(
                array_keys($replacements),
                array_values($replacements),
                $format
            );
            // Return as render array.
            return [
                '#markup' => $output,
            ];
        }

        return [];
    }
}

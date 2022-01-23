<?php

namespace Drupal\icecream_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Facebook' Block.
 *
 * @Block(
 *   id = "facebook_block",
 *   admin_label = @Translation("Facebook Block"),
 *   category = @Translation("Custom"),
 * )
 */
class FacebookBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        // $url = urldecode(
        //     'https://www.facebook.com/v2.9/plugins/comments.php?app_id=1923161321262442&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1a876ecb2e593%26domain%3Dwww.republicworld.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.republicworld.com%252Ff3a6d7848ec9fa4%26relation%3Dparent.parent&container_width=758&height=100&href=https%3A%2F%2Fwww.republicworld.com%2Findia-news%2Fpolitics%2Fdilip-ghosh-tells-tathagata-roy-to-quit-bjp-if-ashamed-ex-guv-affirms-i-will-stay-on&locale=en_US&numposts=5&sdk=joey&version=v2.9&width=550'
        // );

        $url =
            'https://www.facebook.com/plugins/feedback.php?app_id&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfed28f70607b4%26domain%3Dlocalhost%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Flocalhost%252Ff1d5b87d97f534%26relation%3Dparent.parent&container_width=800&height=100&href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2Fcomments%23configuratorhttp%3A%2F%2Flocalhost%2Frepublicnews%2Fweb%2F&locale=en_US&numposts=1&sdk=joey&version=v12.0&width=550';

        return [
            '#type' => 'inline_template',
            '#template' => '<iframe src="{{ url }}"></iframe>',
            '#context' => [
                'url' => $url,
            ],
        ];
    }
}

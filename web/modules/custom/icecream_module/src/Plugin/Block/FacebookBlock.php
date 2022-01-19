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
            // 'https://www.facebook.com/v2.9/plugins/comments.php?app_id=1923161321262442&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1a876ecb2e593%26domain%3Dwww.republicworld.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.republicworld.com%252Ff3a6d7848ec9fa4%26relation%3Dparent.parent&container_width=758&height=100&href=https%3A%2F%2Fwww.republicworld.com%2Findia-news%2Fpolitics%2Fdilip-ghosh-tells-tathagata-roy-to-quit-bjp-if-ashamed-ex-guv-affirms-i-will-stay-on&locale=en_US&numposts=5&sdk=joey&version=v2.9&width=550';
            'https%3A%2F%2Fwww.facebook.com%2Fv2.9%2Fplugins%2Fcomments.php%3Fapp_id%3D1923161321262442%26channel%3Dhttps%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1a876ecb2e593%26domain%3Dwww.localhost%2Frepublicnews%2Fweb%26is_canvas%3Dfalse%26origin%3Dhttp%3A%2F%2Fwww.localhost%2Frepublicnews%2Fweb%2Ff3a6d7848ec9fa4%26relation%3Dparent.parent%26container_width%3D758%26height%3D100%26href%3Dhttp%3A%2F%2Fwww.localhost%2Frepublicnews%2Fweb%2Findia-news%2Fpolitics%2Fdilip-ghosh-tells-tathagata-roy-to-quit-bjp-if-ashamed-ex-guv-affirms-i-will-stay-on%26locale%3Den_US%26numposts%3D5%26sdk%3Djoey%26version%3Dv2.9%26width%3D550%27%3B';

        return [
            '#type' => 'inline_template',
            '#template' => '<iframe src="{{ url }}"></iframe>',
            '#context' => [
                'url' => $url,
            ],
        ];
    }
}

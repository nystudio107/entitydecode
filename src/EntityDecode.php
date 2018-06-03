<?php
/**
 * EntityDecode plugin for Craft CMS 3.x
 *
 * @link      https://nystudio107.com/
 * @copyright Copyright (c) 2017 nystudio107
 * @license   MIT License https://opensource.org/licenses/MIT
 */

namespace nystudio107\entitydecode;

use nystudio107\entitydecode\twigextensions\EntityDecodeTwigExtension;

use Craft;
use craft\base\Plugin;

/**
 * Class EntityDecode
 *
 * @author    nystudio107
 * @package   EntityDecode
 * @since     1.0.0
 */
class EntityDecode extends Plugin
{
    /**
     * @var EntityDecode
     */
    public static $plugin;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;
        $this->name = $this->getName();

        // Add in our Twig extensions
        Craft::$app->view->registerTwigExtension(new EntityDecodeTwigExtension());

        Craft::info(
            Craft::t(
                'entitydecode',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    /**
     * Returns the user-facing name of the plugin, which can override the name
     * in composer.json
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t('entitydecode', 'EntityDecode');
    }
}

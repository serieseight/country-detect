<?php

/**
 * Country Detect plugin for Craft CMS 3.x
 *
 * @link      https://serieseight.com/
 * @copyright Copyright (c) 2018 Series Eight
 */

namespace serieseight\countrydetect;

use serieseight\countrydetect\variables\CountryDetectVariable;
use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;
use yii\base\Event;

class CountryDetect extends Plugin
{

  public static $plugin;
  public $schemaVersion = '0.1';

  public function init()
  {
    parent::init();
    self::$plugin = $this;

    Event::on(
      CraftVariable::class,
      CraftVariable::EVENT_INIT,
      function (Event $event) {
        /** @var CraftVariable $variable */
        $variable = $event->sender;
        $variable->set('countryDetect', CountryDetectVariable::class);
      }
    );

    Event::on(
      Plugins::class,
      Plugins::EVENT_AFTER_INSTALL_PLUGIN,
      function (PluginEvent $event) {
        if ($event->plugin === $this) {
        }
      }
    );

    Craft::info(
      Craft::t(
        'country-detect',
        '{name} plugin loaded',
        ['name' => $this->name]
      ),
      __METHOD__
    );
  }

}

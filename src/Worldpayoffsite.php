<?php

namespace dynam\worldpayoffsite;

use craft\commerce\services\Gateways;
use dynam\worldpayoffsite\gateways\Gateway;
use craft\events\RegisterComponentTypesEvent;
use yii\base\Event;
use craft\base\ComponentInterface;

/**
 * Plugin represents the WorldPay integration plugin.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  1.0
 */
class Worldpayoffsite extends \craft\base\Plugin
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Event::on(Gateways::class, Gateways::EVENT_REGISTER_GATEWAY_TYPES,  function(RegisterComponentTypesEvent $event) {
            $event->types[] = Gateway::class;
        });
    }
}

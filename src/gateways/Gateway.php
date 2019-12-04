<?php

namespace dynam\worldpayoffsite\gateways;

use Craft;
use craft\commerce\omnipay\base\OffsiteGateway;
use dynam\worldpayoffsite\WorldpayoffsitePaymentBundle;
use craft\web\View;
use Omnipay\Common\AbstractGateway;
use Omnipay\Omnipay;
use Omnipay\WorldPay\Gateway as OmnipayGateway;

/**
 * Gateway represents WorldPay Business Gateway
 *
 * @author    Dynam <web@dynam.co.uk>
 * @since     1.0
 */
class Gateway extends OffsiteGateway
{
    // Properties
    // =========================================================================

    /**
     * @var string
     */
    public $installationId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $signatureFields;

    /**
     * @var string
     */
    public $secretWord;

    /**
     * @var string
     */
    public $callbackPassword;

    /**
     * @var bool
     */
    public $testMode;

    /**
     * @var bool
     */
    public $noLanguageMenu;

    /**
     * @var bool
     */
    public $fixContact;

    /**
     * @var bool
     */
    public $hideContact;

    /**
     * @var bool
     */
    public $hideCurrency;


    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('commerce-worldpay-bg', 'Worldpay Business Gateway');
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate('commerce-worldpay-bg/gatewaySettings', ['gateway' => $this]);
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createGateway(): AbstractGateway
    {
        /** @var OmnipayGateway $gateway */
        $gateway = static::createOmnipayGateway($this->getGatewayClassName());

        $gateway->setInstallationId(Craft::parseEnv($this->installationId));
        $gateway->setAccountId(Craft::parseEnv($this->accountId));
        $gateway->setSecretWord(Craft::parseEnv($this->secretWord));
        $gateway->setCallbackPassword(Craft::parseEnv($this->callbackPassword));
        $gateway->setTestMode($this->testMode);
        $gateway->setNoLanguageMenu($this->noLanguageMenu);
        $gateway->setFixContact($this->fixContact);
        $gateway->setHideContact($this->hideContact);
        $gateway->setHideCurrency($this->hideCurrency);
        $gateway->setSignatureFields(Craft::parseEnv($this->signatureFields));

        return $gateway;
    }

    /**
     * @inheritdoc
     */
    protected function getGatewayClassName()
    {
        return '\\'.OmnipayGateway::class;
    }
}

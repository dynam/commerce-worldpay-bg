<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace dynam\worldpayoffsite\migrations;

use Craft;
use craft\db\Migration;
use craft\db\Query;

/**
 * Installation Migration
 *
 * @author Dynam <web@dynam.co.uk>
 * @since  1.0
 */
class Install extends Migration
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        return true;
    }

}

<?php
/*
 * Copyright (c) Since 2007 PrestaShop.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPStanForPrestaShopTests\Data\UseTypeHintForNewMethods;

class MethodWithMixedValueArgumentInPhpDoc
{
    /**
     * @param mixed $value
     * @param integer $constraint
     */
    public function validate($value, int $constraint): void
    {
        return;
    }
}

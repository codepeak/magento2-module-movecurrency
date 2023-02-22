<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Codepeak\MoveCurrency\Rewrite\Magento\Framework;

class NumberFormatter extends \Magento\Framework\NumberFormatter
{
    public function __construct(
        $locale = null,
        $style = \NumberFormatter::CURRENCY,
        $pattern = null
    ) {
        parent::__construct($locale, $style, $pattern);

        $this->setPattern('#,##0.00 ¤');
    }
}
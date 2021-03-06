<?php

/*
 * This file is part of the zibios/wrike-php-library package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpLibrary\Enum;

/**
 * Custom Field Type Enum.
 */
class CustomFieldTypeEnum extends AbstractEnum
{
    const TEXT = 'Text';
    const DROP_DOWN = 'DropDown';
    const NUMERIC = 'Numeric';
    const MONEY = 'Money';
    const PERCENTAGE = 'Percentage';
    const DATE = 'Date';
    const DURATION = 'Duration';
    const CHECKBOX = 'Checkbox';
}

<?php

declare(strict_types=1);

namespace PhpSchool\CliMenu\Style;

use PhpSchool\CliMenu\MenuItem\MenuItemInterface;

class DefaultStyle implements ItemStyle, Customisable
{
    private const DEFAULT_STYLES = [
    ];

    public function hasChangedFromDefaults() : bool
    {
        return true;
    }

    public function getDisplaysExtra() : bool
    {
        return false;
    }

    public function getItemExtra() : string
    {
        return '';
    }

    public function getMarker(MenuItemInterface $style, bool $isSelected) : string
    {
        return '';
    }
}

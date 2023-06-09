<?php

declare(strict_types=1);

namespace BombenProdukt\EnumPowerpack\Concerns;

trait EnumeratesValues
{
    public static function values(): array
    {
        return \array_column(self::cases(), 'value');
    }
}

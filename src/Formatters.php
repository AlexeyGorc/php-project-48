<?php

namespace Differ\Formatters;

use function Differ\Formatters\Stylish\format as getFormatStylish;
use function Differ\Formatters\Plain\format as getFormatPlain;
use function Differ\Formatters\Json\format as getFormatJson;

function getFormat(array $astTree, string $formatter): string
{
    return match ($formatter) {
        'stylish' => getFormatStylish($astTree),
        'plain' => getFormatPlain($astTree),
        'json' => getFormatJson($astTree),
        default => throw new \Exception("Invalid formatter. The format should be 'stylish', 'plain' or 'json'"),
    };
}

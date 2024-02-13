<?php

namespace Differ\Formatters;

use function Differ\Formatters\Json\getJson;
use function Differ\Formatters\Plain\getPlain;
use function Differ\Formatters\Stylish\getStylish;

function getFormat(array $astTree, string $formatter): string
{
    return match ($formatter) {
        'stylish' => getStylish($astTree),
        'plain' => getPlain($astTree),
        'json' => getJson($astTree),
        default => throw new \Exception("Invalid formatter. The format should be 'stylish', 'plain' or 'json'"),
    };
}

<?php

namespace Differ\Parser;

use Symfony\Component\Yaml\Yaml;

function getParsedContent(string $content, string $extension): object
{
    return match ($extension) {
        'json' => json_decode($content),
        'yaml', 'yml' => Yaml::parse($content, Yaml::PARSE_OBJECT_FOR_MAP),
        default => throw new \Exception("Invalid extension. Extension must be in JSON, YAML or YML"),
    };
}

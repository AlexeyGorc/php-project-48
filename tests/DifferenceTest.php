<?php

namespace Differ\Tests\DifferenceTest;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use Differ\Differ;

class DifferenceTest extends TestCase
{
    private function getFixturePath(string $filename): string
    {
        return __DIR__ . "/fixtures/{$filename}";
    }

    public static function additionProvider(): mixed
    {
        return [
            ['file1.json', 'file2.json', 'stylish', 'formatStylish.txt'],
            ['file1.yaml', 'file2.yaml', 'stylish', 'formatStylish.txt'],
        ];
    }

    #[DataProvider('additionProvider')]
    public function testGenDiff(string $file1, string $file2, string $format, string $excepted): void
    {
        $fixture1 = $this->getFixturePath($file1);
        $fixture2 = $this->getFixturePath($file2);
        $pathToExpected = $this->getFixturePath($excepted);

        $this->assertStringEqualsFile($pathToExpected, Differ\genDiff($fixture1, $fixture2, $format));
    }
}

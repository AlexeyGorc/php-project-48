<?php

namespace Tests\Test;

use PHPUnit\Framework\TestCase;

use function Differ\Differ\genDiff;

class DifferenceTest extends TestCase
{
    private function getFixturePath(string $filename): string
    {
        return __DIR__ . "/fixtures/{$filename}";
    }

    /**
     * @dataProvider argumentProvider
     */
    public function testGenDiff($firstPath, $secondPath, $expectedFile, $style = 'stylish')
    {
        $firstPath = $this->getFixturePath($firstPath);
        $secondPath = $this->getFixturePath($secondPath);
        $expectedFile = $this->getFixturePath($expectedFile);

        $this->assertStringEqualsFile($expectedFile, genDiff($firstPath, $secondPath, $style));
    }


    public static function argumentProvider(): array
    {
        return [
          ['file1.json', 'file2.json', 'result_formatter_stylish'],
          ['file1.yaml', 'file2.yaml', 'result_formatter_stylish'],

          ['file1_tree.json', 'file2_tree.json', 'result_formatter_tree_stylish'],
          ['file1_tree.json', 'file2_tree.json', 'result_formatter_tree_stylish', 'stylish'],

          ['file1_tree.yaml', 'file2_tree.yaml', 'result_formatter_tree_stylish'],
          ['file1_tree.yaml', 'file2_tree.yaml', 'result_formatter_tree_stylish', 'stylish'],

          ['file1_tree.json', 'file2_tree.json', 'result_formatter_tree_plain', 'plain'],
          ['file1_tree.yaml', 'file2_tree.yaml', 'result_formatter_tree_plain', 'plain'],

          ['file1_tree.json', 'file2_tree.json', 'result_formatter_json', 'json'],
          ['file1_tree.yaml', 'file2_tree.yaml', 'result_formatter_json', 'json']
        ];
    }
}
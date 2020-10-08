<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    const FILE_PATH = __DIR__ . '/../data/globs/';

    public function testGlobs(): void
    {
        $files = globs(self::FILE_PATH);
        $this->assertCount(3, $files);
    }
}

<?php

declare(strict_types=1);

namespace Idiosyncratic\EditorConfig\Declaration;

use DomainException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class InsertFinalNewlineTest extends TestCase
{
    public function testValidValues()
    {
        $declaration = new InsertFinalNewline(false);
        $this->assertEquals('insert_final_newline=false', (string) $declaration);

        $declaration = new InsertFinalNewline(true);
        $this->assertEquals('insert_final_newline=true', (string) $declaration);
    }

    public function testInvalidIntValue()
    {
        $this->expectException(DomainException::class);
        $declaration = new InsertFinalNewline(4);
    }

    public function testInvalidStringValue()
    {
        $this->expectException(DomainException::class);
        $declaration = new InsertFinalNewline('four');
    }
}

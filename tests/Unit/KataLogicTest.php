<?php

declare(strict_types = 1);

namespace KataTests\Unit;

use Kata\KataLogic;
use PHPUnit\Framework\TestCase;

final class KataLogicTest extends TestCase
{
    public function test_me(): void
    {
        $kata = new KataLogic();
        self::assertTrue($kata->logic());
    }
}

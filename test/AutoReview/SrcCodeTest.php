<?php

declare(strict_types=1);

/**
 * Copyright (c) 2020-2021 Gansel Rechtsanwälte
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config
 */

namespace Gansel\PhpCsFixer\Config\Test\AutoReview;

use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @coversNothing
 */
final class SrcCodeTest extends Framework\TestCase
{
    use Helper;

    /**
     * @test
     */
    public function srcClassesHaveUnitTests(): void
    {
        self::assertClassesHaveTests(
            __DIR__.'/../../src',
            'Gansel\\PhpCsFixer\\Config\\',
            'Gansel\\PhpCsFixer\\Config\\Test\\Unit\\'
        );
    }
}

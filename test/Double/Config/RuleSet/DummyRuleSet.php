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

namespace Gansel\PhpCsFixer\Config\Test\Double\Config\RuleSet;

use Gansel\PhpCsFixer\Config;

final class DummyRuleSet implements Config\RuleSet
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array<string, array|bool>
     */
    private $rules;

    /**
     * @var int
     */
    private $phpVersion;

    /**
     * @param array<string, array|bool> $rules
     */
    public function __construct(string $name, array $rules, int $phpVersion)
    {
        $this->name = $name;
        $this->rules = $rules;
        $this->phpVersion = $phpVersion;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function rules(): array
    {
        return $this->rules;
    }

    public function targetPhpVersion(): int
    {
        return $this->phpVersion;
    }
}

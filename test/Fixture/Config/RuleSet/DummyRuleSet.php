<?php

declare(strict_types=1);

/**
 * Copyright (c) 2020 Gansel Rechtsanwälte
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config
 */

namespace Gansel\PhpCsFixer\Config\Test\Fixture\Config\RuleSet;

use Gansel\PhpCsFixer\Config;

final class DummyRuleSet implements Config\RuleSet
{
    private string $name;

    /**
     * @var array<string, array|bool>
     */
    private array $rules;

    private int $phpVersion;

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

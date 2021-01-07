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

namespace Gansel\PhpCsFixer\Config\RuleSet;

use Gansel\PhpCsFixer\Config\RuleSet;

/**
 * @internal
 */
abstract class AbstractRuleSet implements RuleSet
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var array<string, array|bool>
     */
    protected $rules = [];

    /**
     * @var int
     */
    protected $targetPhpVersion = 0;

    final public function __construct(?string $header = null)
    {
        if (null === $header) {
            return;
        }

        $this->rules['header_comment'] = [
            'comment_type' => 'PHPDoc',
            'header' => \trim($header),
            'location' => 'after_declare_strict',
            'separate' => 'both',
        ];
    }

    final public function name(): string
    {
        return $this->name;
    }

    final public function rules(): array
    {
        return $this->rules;
    }

    final public function targetPhpVersion(): int
    {
        return $this->targetPhpVersion;
    }
}

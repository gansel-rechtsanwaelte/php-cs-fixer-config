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

use Ergebnis\License;
use Gansel\PhpCsFixer;

$license = License\Type\MIT::markdown(
    __DIR__.'/LICENSE.md',
    License\Range::since(
        License\Year::fromString('2020'),
        new \DateTimeZone('UTC')
    ),
    License\Holder::fromString('Gansel Rechtsanwälte'),
    License\Url::fromString('https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config')
);

$license->save();

$config = PhpCsFixer\Config\Factory::fromRuleSet(new PhpCsFixer\Config\RuleSet\Php72($license->header()));

$config->getFinder()
    ->exclude([
        '.build/',
        '.github/',
        '.notes/',
    ])
    ->ignoreDotFiles(false)
    ->in(__DIR__)
    ->name('.php_cs');

$config->setCacheFile(__DIR__.'/.build/php-cs-fixer/.php_cs.cache');

return $config;

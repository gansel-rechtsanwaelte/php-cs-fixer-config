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

namespace Gansel\PhpCsFixer\Config\Test\Unit\RuleSet;

use Gansel\PhpCsFixer\Config;
use PhpCsFixer\Fixer;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet;
use PHPUnit\Framework;

/**
 * @internal
 */
abstract class AbstractRuleSetTestCase extends Framework\TestCase
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $rules;

    /**
     * @var int
     */
    protected $targetPhpVersion;

    /**
     * @test
     */
    final public function defaults(): void
    {
        $ruleSet = self::createRuleSet();

        self::assertSame($this->name, $ruleSet->name());
        self::assertEquals($this->rules, $ruleSet->rules());
        self::assertEquals($this->targetPhpVersion, $ruleSet->targetPhpVersion());
    }

    /**
     * @test
     */
    final public function ruleSetDoesDoNotConfigureRulesThatAreNotBuiltIn(): void
    {
        $namesOfRulesThatAreConfiguredAndNotBuiltIn = \array_diff(
            self::namesOfRulesThatAreConfigured(),
            self::namesOfRulesThatAreBuiltIn()
        );

        self::assertEmpty($namesOfRulesThatAreConfiguredAndNotBuiltIn, \sprintf(
            "Failed asserting that rule set \"%s\" configures only built-in rules. Rules with names\n\n%s\n\nare unknown.",
            static::className(),
            ' - '.\implode("\n - ", $namesOfRulesThatAreConfiguredAndNotBuiltIn)
        ));
    }

    /**
     * @test
     */
    final public function ruleSetDoesNotConfigureRulesThatAreDeprecated(): void
    {
        $namesOfRulesThatAreConfiguredAndDeprecated = \array_intersect(
            self::namesOfRulesThatAreDeprecated(),
            self::namesOfRulesThatAreConfigured()
        );

        self::assertEmpty($namesOfRulesThatAreConfiguredAndDeprecated, \sprintf(
            "Failed asserting that rule set \"%s\" does not configure deprecated rules. Rules with names\n\n%s\n\nare deprecated.",
            static::className(),
            ' - '.\implode("\n - ", $namesOfRulesThatAreConfiguredAndDeprecated)
        ));
    }

    /**
     * @test
     */
    final public function rulesAreSortedByNameInRuleSet(): void
    {
        $ruleNames = \array_keys(self::createRuleSet()->rules());

        $sorted = $ruleNames;

        \sort($sorted);

        self::assertEquals($sorted, $ruleNames, \sprintf(
            'Failed asserting that the rules are sorted by name in rule set "%s".',
            static::className()
        ));
    }

    /**
     * @test
     */
    final public function rulesAreSortedByNameInRuleSetTest(): void
    {
        $ruleNames = \array_keys($this->rules);

        $sorted = $ruleNames;

        \sort($sorted);

        self::assertEquals($sorted, $ruleNames, \sprintf(
            'Failed asserting that the rules are sorted by name in rule set test "%s".',
            static::class
        ));
    }

    /**
     * @test
     */
    final public function headerCommentFixerIsDisabledByDefault(): void
    {
        $rules = self::createRuleSet()->rules();

        self::assertArrayHasKey('header_comment', $rules);
        self::assertFalse($rules['header_comment']);
    }

    /**
     * @dataProvider provideValidHeader
     *
     * @test
     */
    final public function headerCommentFixerIsEnabledIfHeaderIsProvided(string $header): void
    {
        $rules = self::createRuleSet($header)->rules();

        self::assertArrayHasKey('header_comment', $rules);

        $expected = [
            'comment_type' => 'PHPDoc',
            'header' => \trim($header),
            'location' => 'after_declare_strict',
            'separate' => 'both',
        ];

        self::assertSame($expected, $rules['header_comment']);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    final public function provideValidHeader(): \Generator
    {
        $values = [
            'string-empty' => '',
            'string-not-empty' => 'foo',
            'string-with-line-feed-only' => "\n",
            'string-with-spaces-only' => ' ',
            'string-with-tab-only' => "\t",
        ];

        foreach ($values as $key => $value) {
            yield $key => [
                $value,
            ];
        }
    }

    /**
     * @phpstan-return class-string
     *
     * @psalm-return class-string
     *
     * @throws \RuntimeException
     */
    final protected static function className(): string
    {
        $className = \preg_replace(
            '/Test$/',
            '',
            \str_replace(
                '\Test\Unit',
                '',
                static::class
            )
        );

        if (!\is_string($className)) {
            throw new \RuntimeException(\sprintf(
                'Failed resolving class name from test class name "%s".',
                static::class
            ));
        }

        if (!\class_exists($className)) {
            throw new \RuntimeException(\sprintf(
                'Class name "%s" resolved from test class name "%s" does not reference a class that exists.',
                $className,
                static::class
            ));
        }

        return $className;
    }

    /**
     * @throws \RuntimeException
     */
    final protected static function createRuleSet(?string $header = null): Config\RuleSet
    {
        $className = self::className();

        $reflection = new \ReflectionClass($className);

        $ruleSet = $reflection->newInstance($header);

        if (!$ruleSet instanceof Config\RuleSet) {
            throw new \RuntimeException(\sprintf(
                'Class %s" does not implement interface "%s".',
                $className,
                Config\RuleSet::class
            ));
        }

        return $ruleSet;
    }

    /**
     * @return array<string, Fixer\FixerInterface>
     */
    private static function fixersThatAreBuiltIn(): array
    {
        $fixerFactory = FixerFactory::create();

        $fixerFactory->registerBuiltInFixers();

        $fixers = $fixerFactory->getFixers();

        /** @var array<string, Fixer\FixerInterface> $fixersThatAreBuiltIn */
        $fixersThatAreBuiltIn = \array_combine(
            \array_map(static function (Fixer\FixerInterface $fixer): string {
                return $fixer->getName();
            }, $fixers),
            $fixers
        );

        \ksort($fixersThatAreBuiltIn);

        return $fixersThatAreBuiltIn;
    }

    /**
     * @return array<int, string>
     */
    private static function namesOfRulesThatAreConfigured(): array
    {
        /**
         * RuleSet\RuleSet::resolveSet() removes disabled fixers, to let's just enable them to make sure they are not removed.
         *
         * @see RuleSet\RuleSet::resolveSet()
         */
        $rules = \array_map(static function ($ruleConfiguration): bool {
            return true;
        }, self::createRuleSet()->rules());

        $ruleSet = new Ruleset\RuleSet($rules);

        /** @var array<string, Fixer\FixerInterface> $fixersThatAreConfigured */
        $fixersThatAreConfigured = $ruleSet->getRules();

        \ksort($fixersThatAreConfigured);

        return \array_keys($fixersThatAreConfigured);
    }

    /**
     * @return array<int, string>
     */
    private static function namesOfRulesThatAreBuiltIn(): array
    {
        return \array_keys(self::fixersThatAreBuiltIn());
    }

    /**
     * @return array<int, string>
     */
    private static function namesOfRulesThatAreDeprecated(): array
    {
        return \array_keys(\array_filter(self::fixersThatAreBuiltIn(), static function (Fixer\FixerInterface $fixer): bool {
            return $fixer instanceof Fixer\DeprecatedFixerInterface;
        }));
    }
}

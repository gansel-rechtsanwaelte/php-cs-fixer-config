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
    protected string $name;
    protected array $rules;
    protected int $targetPhpVersion;

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
    final public function allConfiguredFixersAreBuiltIn(): void
    {
        $namesOfFixersNotBuiltIn = \array_diff(
            self::configuredFixerNames(),
            self::builtInFixerNames()
        );

        \sort($namesOfFixersNotBuiltIn);

        self::assertEmpty($namesOfFixersNotBuiltIn, \sprintf(
            "Failed asserting that fixers with the names\n\n%s\n\nare built in.",
            ' - '.\implode("\n - ", $namesOfFixersNotBuiltIn)
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
    final public function rulesDoNotEnableDeprecatedFixers(): void
    {
        $fixers = self::builtInFixers();

        $rulesEnablingDeprecatedFixers = \array_filter(
            self::createRuleSet()->rules(),
            static function ($ruleConfiguration, string $ruleName) use ($fixers): bool {
                if (false === $ruleConfiguration) {
                    return false;
                }

                if (!\array_key_exists($ruleName, $fixers)) {
                    return false;
                }

                $fixer = $fixers[$ruleName];

                return $fixer instanceof Fixer\DeprecatedFixerInterface;
            },
            \ARRAY_FILTER_USE_BOTH
        );

        $namesOfEnabledDeprecatedFixers = \array_keys($rulesEnablingDeprecatedFixers);

        self::assertEmpty($namesOfEnabledDeprecatedFixers, \sprintf(
            "Failed asserting that deprecated fixers with names\n\n%s\n\nare not enabled in rule set \"%s\".",
            ' - '.\implode("\n - ", $namesOfEnabledDeprecatedFixers),
            static::className()
        ));
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
    private static function builtInFixers(): array
    {
        $fixerFactory = FixerFactory::create();

        $fixerFactory->registerBuiltInFixers();

        $fixers = $fixerFactory->getFixers();

        /** @var array<string, Fixer\FixerInterface> $builtInFixers */
        $builtInFixers = \array_combine(
            \array_map(static function (Fixer\FixerInterface $fixer): string {
                return $fixer->getName();
            }, $fixers),
            $fixers
        );

        return $builtInFixers;
    }

    /**
     * @return array<int, string>
     */
    private static function builtInFixerNames(): array
    {
        return \array_keys(self::builtInFixers());
    }

    /**
     * @return array<int, string>
     */
    private static function configuredFixerNames(): array
    {
        /**
         * RuleSet::create() removes disabled fixers, to let's just enable them to make sure they are not removed.
         *
         * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/pull/2361
         */
        $rules = \array_map(static function ($ruleConfiguration): bool {
            return true;
        }, self::createRuleSet()->rules());

        /** @var array<string, Fixer\FixerInterface> $fixers */
        $fixers = RuleSet::create($rules)->getRules();

        return \array_keys($fixers);
    }
}

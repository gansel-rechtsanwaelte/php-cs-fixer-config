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

use PhpCsFixer\Fixer;

/**
 * @internal
 *
 * @covers \Gansel\PhpCsFixer\Config\RuleSet\AbstractRuleSet
 * @covers \Gansel\PhpCsFixer\Config\RuleSet\Php74
 */
final class Php72Test extends AbstractRuleSetTestCase
{
    protected $name = 'gansel (PHP 7.2)';

    protected $rules = [
        '@DoctrineAnnotation' => true,
        '@Symfony' => true,
        'array_indentation' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'declare',
                'default',
                'die',
                'do',
                'exit',
                'for',
                'foreach',
                'goto',
                'if',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
                'while',
            ],
        ],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'compact_nullable_typehint' => true,
        'declare_strict_types' => true,
        'explicit_string_variable' => true,
        'header_comment' => false,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'logical_operators' => true,
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'multiline_whitespace_before_semicolons' => true,
        'native_function_invocation' => [
            'include' => [
                '@compiler_optimized',
            ],
            'scope' => 'namespaced',
        ],
        'no_null_property_initialization' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'nullable_type_declaration_for_default_null_value' => false,
        'ordered_class_elements' => true,
        'ordered_imports' => [
            'imports_order' => [
                Fixer\Import\OrderedImportsFixer::IMPORT_TYPE_CLASS,
                Fixer\Import\OrderedImportsFixer::IMPORT_TYPE_CONST,
                Fixer\Import\OrderedImportsFixer::IMPORT_TYPE_FUNCTION,
            ],
        ],
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => [
            'target' => 'newest',
        ],
        'php_unit_dedicate_assert_internal_type' => true,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => [
            'style' => 'annotation',
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
        ],
        'phpdoc_no_empty_return' => true,
        'protected_to_private' => true,
        'psr_autoloading' => true,
        'return_assignment' => false,
        'single_line_throw' => false,
        'strict_comparison' => true,
        'strict_param' => true,
        'ternary_to_null_coalescing' => true,
        'visibility_required' => [
            'elements' => [
                'const',
                'method',
                'property',
            ],
        ],
        'void_return' => true,
    ];

    protected $targetPhpVersion = 70200;
}

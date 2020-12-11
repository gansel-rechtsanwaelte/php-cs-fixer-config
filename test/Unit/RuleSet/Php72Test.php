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
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_push' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'backtick_to_shell_exec' => true,
        'binary_operator_spaces' => true,
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
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
        'braces' => [
            'allow_single_line_anonymous_class_with_empty_body' => true,
            'allow_single_line_closure' => true,
        ],
        'cast_spaces' => true,
        'class_attributes_separation' => [
            'elements' => [
                'method' => 'one',
            ],
        ],
        'class_definition' => [
            'single_line' => true,
        ],
        'class_keyword_remove' => false,
        'clean_namespace' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'combine_nested_dirname' => true,
        'comment_to_phpdoc' => false,
        'compact_nullable_typehint' => true,
        'concat_space' => true,
        'constant_case' => true,
        'date_time_immutable' => false,
        'declare_equal_normalize' => true,
        'declare_strict_types' => true,
        'dir_constant' => true,
        'doctrine_annotation_array_assignment' => [
            'operator' => ':',
        ],
        'doctrine_annotation_braces' => true,
        'doctrine_annotation_indentation' => true,
        'doctrine_annotation_spaces' => [
            'before_array_assignments_colon' => false,
        ],
        'echo_tag_syntax' => true,
        'elseif' => true,
        'encoding' => true,
        'ereg_to_preg' => true,
        'error_suppression' => false,
        'escape_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_class' => false,
        'final_internal_class' => false,
        'final_public_method_for_abstract_class' => false,
        'fopen_flag_order' => false,
        'fopen_flags' => false,
        'full_opening_tag' => true,
        'fully_qualified_strict_types' => true,
        'function_declaration' => true,
        'function_to_constant' => false,
        'function_typehint_space' => true,
        'general_phpdoc_annotation_remove' => false,
        'general_phpdoc_tag_rename' => [
            'replacements' => [
                'inheritDocs' => 'inheritDoc',
            ],
        ],
        'global_namespace_import' => false,
        'group_import' => false,
        'header_comment' => false,
        'heredoc_indentation' => false,
        'heredoc_to_nowdoc' => false,
        'implode_call' => false,
        'include' => true,
        'increment_style' => true,
        'indentation_type' => true,
        'is_null' => false,
        'lambda_not_used_import' => true,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'logical_operators' => true,
        'lowercase_cast' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'mb_str_functions' => false,
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'method_chaining_indentation' => false,
        'modernize_types_casting' => false,
        'multiline_comment_opening_closing' => false,
        'multiline_whitespace_before_semicolons' => true,
        'native_constant_invocation' => false,
        'native_function_casing' => true,
        'native_function_invocation' => [
            'include' => [
                '@compiler_optimized',
            ],
            'scope' => 'namespaced',
        ],
        'native_function_type_declaration_casing' => true,
        'new_with_braces' => true,
        'no_alias_functions' => false,
        'no_alias_language_construct_call' => true,
        'no_alternative_syntax' => true,
        'no_binary_string' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_blank_lines_before_namespace' => false,
        'no_break_comment' => true,
        'no_closing_tag' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'square_brace_block',
                'switch',
                'throw',
                'use',
                'use_trait',
            ],
        ],
        'no_homoglyph_names' => false,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => false,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_around_offset' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_trailing_whitespace_in_string' => false,
        'no_unneeded_control_parentheses' => [
            'statements' => [
                'break',
                'clone',
                'continue',
                'echo_print',
                'return',
                'switch_case',
                'yield',
                'yield_from',
            ],
        ],
        'no_unneeded_curly_braces' => [
            'namespaces' => true,
        ],
        'no_unneeded_final_method' => false,
        'no_unreachable_default_argument_value' => false,
        'no_unset_cast' => true,
        'no_unset_on_property' => false,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => false,
        'no_useless_sprintf' => false,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => false,
        'normalize_index_brace' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'nullable_type_declaration_for_default_null_value' => false,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => false,
        'ordered_class_elements' => true,
        'ordered_imports' => [
            'imports_order' => [
                Fixer\Import\OrderedImportsFixer::IMPORT_TYPE_CLASS,
                Fixer\Import\OrderedImportsFixer::IMPORT_TYPE_CONST,
                Fixer\Import\OrderedImportsFixer::IMPORT_TYPE_FUNCTION,
            ],
        ],
        'ordered_interfaces' => false,
        'ordered_traits' => true,
        'php_unit_construct' => true,
        'php_unit_dedicate_assert' => [
            'target' => 'newest',
        ],
        'php_unit_dedicate_assert_internal_type' => true,
        'php_unit_expectation' => false,
        'php_unit_fqcn_annotation' => true,
        'php_unit_internal_class' => false,
        'php_unit_method_casing' => true,
        'php_unit_mock' => false,
        'php_unit_mock_short_will_return' => false,
        'php_unit_namespaced' => false,
        'php_unit_no_expectation_annotation' => false,
        'php_unit_set_up_tear_down_visibility' => false,
        'php_unit_size_class' => false,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => [
            'style' => 'annotation',
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
        ],
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => false,
        'phpdoc_align' => [
            'tags' => [
                'method',
                'param',
                'property',
                'return',
                'throws',
                'type',
                'var',
            ],
        ],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => true,
        'phpdoc_line_span' => false,
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => false,
        'phpdoc_order_by_value' => false,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_tag_casing' => false,
        'phpdoc_tag_type' => [
            'tags' => [
                'inheritDoc' => 'inline',
            ],
        ],
        'phpdoc_to_comment' => true,
        'phpdoc_to_param_type' => false,
        'phpdoc_to_return_type' => false,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
        'phpdoc_var_annotation_correct_order' => false,
        'phpdoc_var_without_name' => true,
        'pow_to_exponentiation' => false,
        'protected_to_private' => true,
        'psr_autoloading' => true,
        'random_api_migration' => false,
        'regular_callable_call' => false,
        'return_assignment' => false,
        'return_type_declaration' => true,
        'self_accessor' => false,
        'self_static_accessor' => false,
        'semicolon_after_instruction' => true,
        'set_type_to_cast' => false,
        'short_scalar_cast' => true,
        'simple_to_complex_string_variable' => false,
        'simplified_if_return' => false,
        'simplified_null_return' => false,
        'single_blank_line_at_eof' => true,
        'single_blank_line_before_namespace' => true,
        'single_class_element_per_statement' => true,
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,
        'single_line_comment_style' => [
            'comment_types' => [
                'hash',
            ],
        ],
        'single_line_throw' => false,
        'single_quote' => true,
        'single_space_after_construct' => true,
        'single_trait_insert_per_statement' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => true,
        ],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'static_lambda' => false,
        'strict_comparison' => true,
        'strict_param' => true,
        'string_line_ending' => false,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'switch_continue_to_break' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => false,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'use_arrow_functions' => false,
        'visibility_required' => [
            'elements' => [
                'const',
                'method',
                'property',
            ],
        ],
        'void_return' => true,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => true,
    ];

    protected $targetPhpVersion = 70200;
}

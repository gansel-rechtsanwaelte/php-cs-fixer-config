# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased

For a full diff see [`1.4.1...main`][1.4.1...main].

## [`1.4.1`][1.4.1]

For a full diff see [`1.4.0...1.4.1`][1.4.0...1.4.1].

### Changed

* Fix license year ([#100]), by [@OskarStark]

## [`1.4.0`][1.4.0]

For a full diff see [`1.3.0...1.4.0`][1.3.0...1.4.0].

### Changed

* Configured `native_constant_invocation` fixer to ignore built-in constants ([#85]), by [@localheinz]

## [`1.3.0`][1.3.0]

For a full diff see [`1.2.1...1.3.0`][1.2.1...1.3.0].

### Added

* Added rule set for PHP 7.3 ([#80]), by [@localheinz]

### Changed

* Enabled `align_multiline_comment` fixer ([#26]), by [@localheinz]
* Enabled `array_push` fixer ([#27]), by [@localheinz]
* Enabled `combine_nested_dirname` fixer ([#28]), by [@localheinz]
* Enabled `dir_constant` fixer ([#29]), by [@localheinz]
* Enabled `ereg_to_preg` fixer ([#30]), by [@localheinz]
* Enabled `escape_implicit_backslashes` fixer ([#31]), by [@localheinz]
* Enabled `explicit_indirect_variable` fixer ([#32]), by [@localheinz]
* Enabled `final_internal_class` fixer ([#34]), by [@localheinz]
* Enabled `function_to_constant` fixer ([#35]), by [@localheinz]
* Enabled and configured `global_namespace_import` fixer ([#37]), by [@localheinz]
* Enabled `heredoc_to_nowdoc` fixer ([#38]), by [@localheinz]
* Enabled `implode_call` fixer ([#39]), by [@localheinz]
* Enabled `is_null` fixer ([#40]), by [@localheinz]
* Enabled `method_chaining_indentation` fixer ([#41]), by [@localheinz]
* Enabled `modernize_types_casting` fixer ([#42]), by [@localheinz]
* Enabled `multiline_comment_opening_closing` fixer ([#43]), by [@localheinz]
* Enabled `native_constant_invocation` fixer ([#44]), by [@localheinz]
* Enabled `no_alias_functions` fixer ([#45]), by [@localheinz]
* Enabled `no_homoglyph_names` fixer ([#46]), by [@localheinz]
* Enabled `no_trailing_whitespace_in_string` fixer ([#47]), by [@localheinz]
* Enabled `no_unneeded_final_method` fixer ([#48]), by [@localheinz]
* Enabled `no_unreachable_default_argument_value` fixer ([#49]), by [@localheinz]
* Enabled `no_useless_return` fixer ([#50]), by [@localheinz]
* Enabled `no_useless_sprintf` fixer ([#51]), by [@localheinz]
* Enabled `nullable_type_declaration_for_default_null_value` fixer ([#52]), by [@localheinz]
* Enabled and configured `operator_linebreak` fixer ([#53]), by [@localheinz]
* Enabled `ordered_interfaces` fixer ([#54]), by [@localheinz]
* Enabled `php_unit_expectation` fixer ([#56]), by [@localheinz]
* Enabled `php_unit_internal_class` fixer ([#57]), by [@localheinz]
* Enabled `php_unit_mock` fixer ([#58]), by [@localheinz]
* Enabled `php_unit_mock_short_will_return` fixer ([#59]), by [@localheinz]
* Enabled `php_unit_namespaced` fixer ([#60]), by [@localheinz]
* Enabled `php_unit_no_expectation_annotation` fixer ([#61]), by [@localheinz]
* Enabled `php_unit_set_up_tear_down_visibility` fixer ([#62]), by [@localheinz]
* Enabled and configured `phpdoc_line_span` fixer ([#63]), by [@localheinz]
* Enabled `phpdoc_order` fixer ([#64]), by [@localheinz]
* Enabled `phpdoc_tag_casing` fixer ([#65]), by [@localheinz]
* Enabled and configured `phpdoc_order_by_value` fixer ([#66]), by [@localheinz]
* Enabled `phpdoc_var_annotation_correct_order` fixer ([#67]), by [@localheinz]
* Enabled `pow_to_exponentiation` fixer ([#68]), by [@localheinz]
* Enabled `random_api_migration` fixer ([#69]), by [@localheinz]
* Enabled `regular_callable_call` fixer ([#70]), by [@localheinz]
* Enabled `return_assignment` fixer ([#71]), by [@localheinz]
* Enabled `self_accessor` fixer ([#73]), by [@localheinz]
* Enabled `self_static_accessor` fixer ([#74]), by [@localheinz]
* Enabled `set_type_to_cast` fixer ([#75]), by [@localheinz]
* Enabled `simple_to_complex_string_variable` fixer ([#76]), by [@localheinz]
* Enabled `string_line_ending` fixer ([#77]), by [@localheinz]
* Enabled `ternary_to_elvis_operator` fixer ([#78]), by [@localheinz]
* Configured `no_whitespace_before_comma_in_array` differently for `Php72`, `Php73`, and `Php74` rule sets ([#81]), by [@localheinz]
* Configured `trailing_comma_in_multiline_array` differently for `Php72`, `Php73`, and `Php74` rule sets ([#81]), by [@localheinz]

## [`1.2.1`][1.2.1]

For a full diff see [`1.2.0...1.2.1`][1.2.0...1.2.1].

### Changed

* Allowed installation with PHP 8.0 ([#24]), by [@localheinz]

## [`1.2.0`][1.2.0]

For a full diff see [`1.1.0...1.2.0`][1.1.0...1.2.0].

### Changed

* Updated `friendsofphp/php-cs-fixer` ([#21]), by [@localheinz]

## [`1.1.0`][1.1.0]

For a full diff see [`1.0.0...1.1.0`][1.0.0...1.1.0].

### Added

* Added rule set for PHP 7.2 ([#12]), by [@localheinz]

### Changed

* Allowed installation with PHP 7.2 ([#11]), by [@localheinz]

## [`1.0.0`][1.0.0]

For a full diff see [`b9012df...1.0.0`][b9012df...1.0.0].

### Added

* Added configuration from a private repository ([#9]), by [@localheinz]

[1.0.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.0.0
[1.1.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.1.0
[1.2.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.2.0
[1.2.1]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.2.0
[1.3.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.3.0
[1.4.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.4.0
[1.4.1]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/tag/1.4.1

[b9012df...1.0.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/b9012df...1.0.0
[1.0.0...1.1.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.0.0...1.1.0
[1.1.0...1.2.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.1.0...1.2.0
[1.2.0...1.2.1]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.2.0...1.2.1
[1.2.1...1.3.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.2.1...1.3.0
[1.3.0...1.4.0]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.3.0...1.4.0
[1.4.0...1.4.1]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.4.0...1.4.0
[1.4.1...main]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/compare/1.4.1...main

[#9]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/9
[#11]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/11
[#12]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/12
[#21]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/21
[#24]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/24
[#26]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/26
[#27]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/27
[#28]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/28
[#29]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/29
[#30]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/30
[#31]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/31
[#32]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/32
[#34]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/34
[#35]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/35
[#37]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/37
[#38]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/38
[#39]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/39
[#40]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/40
[#41]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/41
[#42]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/42
[#43]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/43
[#44]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/44
[#45]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/45
[#46]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/46
[#47]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/47
[#48]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/48
[#49]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/49
[#50]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/50
[#51]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/51
[#52]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/52
[#53]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/53
[#54]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/54
[#56]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/56
[#57]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/57
[#58]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/58
[#59]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/59
[#60]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/60
[#61]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/61
[#62]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/62
[#63]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/63
[#64]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/64
[#65]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/65
[#66]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/66
[#67]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/67
[#68]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/68
[#69]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/69
[#70]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/70
[#71]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/71
[#73]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/73
[#74]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/74
[#75]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/75
[#76]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/76
[#77]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/77
[#78]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/78
[#80]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/80
[#81]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/81
[#85]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/85
[#100]: https://github.com/gansel-rechtsanwaelte/php-cs-fixer-config/pull/100

[@localheinz]: https://github.com/localheinz
[@OskarStark]: https://github.com/OskarStark

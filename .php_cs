<?php
/*
 * @link https://cs.symfony.com/doc/config.html
 * @link https://cs.symfony.com/doc/ruleSets/index.html
 * @link https://cs.symfony.com/doc/rules/index.html
 */

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in('src')
    ->sortByName()
;

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRules([
        '@PSR12' => true,
        '@PSR12:risky' => true,
        'trailing_comma_in_multiline_array' => true,
        'trailing_comma_in_multiline_array' => true,
        'strict_param' => true,
        'strict_comparison' => true,
        'phpdoc_to_param_type' => true,
        'phpdoc_to_return_type' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_empty_phpdoc' => true,
        'fully_qualified_strict_types' => true,
        'global_namespace_import' => true,
        // 'single_blank_line_before_namespace' => true,
        // 'blank_line_after_namespace' => true,
        // 'return_type_declaration' => true,
        'declare_strict_types' => true,
        'ordered_class_elements' => true,
        'cast_spaces' => true,
        'static_lambda' => true,
    ])
    ->setRiskyAllowed(true)
;

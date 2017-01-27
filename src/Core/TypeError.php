<?php
/**
 * Backward Compatibility
 * \TypeError only available since php 7.0
 * Php 5.6 does not provide \TypeError class
 */
namespace {

    if (!class_exists('TypeError')) {
        /**
         * There are three scenarios where a TypeError may be thrown.
         * The first is where the argument type being passed to a function does not match its corresponding declared
         * parameter type. The second is where a value being returned from a function does not match the declared
         * function return type. The third is where an invalid number of arguments are passed to a built-in PHP function
         * (strict mode only).
         * @link http://php.net/manual/en/class.typeerror.php
         * @since 7.0
         */
        class TypeError extends Error
        {
        }
    }
}

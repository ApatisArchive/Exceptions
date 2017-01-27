<?php
/**
 * Backward Compatibility
 * \ArithmeticError only available since php 7.0
 * Php 5.6 does not provide \ArithmeticError class
 */
namespace {

    if (!class_exists('ArithmeticError')) {
        /**
         * ArithmeticError is thrown when an error occurs while performing mathematical operations.
         * In PHP 7.0, these errors include attempting to perform a bitshift by a negative amount,
         * and any call to {@see intdiv()} that would result in a value outside the possible bounds of an integer.
         * @link http://php.net/manual/en/class.arithmeticerror.php
         * @since 7.0
         */
        class ArithmeticError extends Error
        {
        }
    }
}

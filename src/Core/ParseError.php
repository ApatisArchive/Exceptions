<?php
/**
 * Backward Compatibility
 * \ParseError only available since php 7.0
 * Php 5.6 does not provide \ParseError class
 */
namespace {

    if (!class_exists('ParseError')) {
        /**
         * ParseError is thrown when an error occurs while parsing PHP code, such as when {@see eval()} is called.
         * @link http://php.net/manual/en/class.parseerror.php
         * @since 7.0
         */
        class ParseError extends Error
        {
        }
    }
}

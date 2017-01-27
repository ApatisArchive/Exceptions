<?php
/**
 * Backward Compatibility
 * \AssertionError only available since php 7.0
 * Php 5.6 does not provide \AssertionError class
 */
namespace {

    if (!class_exists('AssertionError')) {
        /**
         * AssertionError is thrown when an assertion made via {@see assert()} fails.
         * @link http://php.net/manual/en/class.assertionerror.php
         * @since 7.0
         */
        class AssertionError extends Error
        {
        }
    }
}

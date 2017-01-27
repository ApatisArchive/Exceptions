<?php
/**
 * Backward Compatibility
 * \DivisionByZeroError only available since php 7.0
 * Php 5.6 does not provide \DivisionByZeroError class
 */
namespace {

    if (!class_exists('DivisionByZeroError')) {

        /**
         * DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
         * @link http://php.net/manual/en/class.divisionbyzeroerror.php
         * @since 7.0
         */
        class DivisionByZeroError extends Error
        {
        }
    }
}

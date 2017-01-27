<?php
/**
 * Backward Compatibility
 * \Error only available since php 7.0
 * Php 5.6 does not provide \Error Class
 * Use instantiate with exception to make sure it will be trace able
 * if on php 5.6 will be instance of @uses \Exception
 */
namespace {

    if (!class_exists('Error')) {
        /**
         * Error is the base class for all internal PHP error exceptions.
         * @link  http://php.net/manual/en/class.error.php
         * @since 7.0
         */
        class Error extends Exception implements Throwable
        {
        }
    }
}

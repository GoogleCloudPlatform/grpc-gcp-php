<?php
/**
 * Helper autocomplete for php grpc extension
 * @author Dmitry Gavriloff <info@imega.ru>
 * @link https://github.com/iMega/grpc-phpdoc
 */
/**
 * Grpc
 * @see http://grpc.io
 * @see https://github.com/grpc/grpc/tree/master/src/php/ext/grpc
 */
// TODO: add constants
namespace Grpc
{
    /**
     * Register status constants
     */

    /**
     * Not an error; returned on success
     */
    const STATUS_OK = 0;

    /**
     * The operation was cancelled (typically by the caller).
     */
    const STATUS_CANCELLED = 1;

    /**
     * Unknown error.  An example of where this error may be returned is
     * if a Status value received from another address space belongs to
     * an error-space that is not known in this address space.  Also
     * errors raised by APIs that do not return enough error information
     * may be converted to this error.
     */
    const STATUS_UNKNOWN = 2;
}

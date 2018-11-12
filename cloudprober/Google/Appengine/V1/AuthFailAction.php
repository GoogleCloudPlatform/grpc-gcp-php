<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Appengine\V1;

/**
 * Actions to take when the user is not logged in.
 *
 * Protobuf type <code>google.appengine.v1.AuthFailAction</code>
 */
class AuthFailAction
{
    /**
     * Not specified. `AUTH_FAIL_ACTION_REDIRECT` is assumed.
     *
     * Generated from protobuf enum <code>AUTH_FAIL_ACTION_UNSPECIFIED = 0;</code>
     */
    const AUTH_FAIL_ACTION_UNSPECIFIED = 0;
    /**
     * Redirects user to "accounts.google.com". The user is redirected back to the
     * application URL after signing in or creating an account.
     *
     * Generated from protobuf enum <code>AUTH_FAIL_ACTION_REDIRECT = 1;</code>
     */
    const AUTH_FAIL_ACTION_REDIRECT = 1;
    /**
     * Rejects request with a `401` HTTP status code and an error
     * message.
     *
     * Generated from protobuf enum <code>AUTH_FAIL_ACTION_UNAUTHORIZED = 2;</code>
     */
    const AUTH_FAIL_ACTION_UNAUTHORIZED = 2;
}

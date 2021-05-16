<?php

use Illuminate\Support\Str;

return [

   /*
   |--------------------------------------------------------------------------
   | Default Session Driver
   |--------------------------------------------------------------------------
   |
   | Supported: "file", "cookie", "database", "apc",
   |            "memcached", "redis", "dynamodb", "array"
   |
   */

   'driver' => env('SESSION_DRIVER', 'database'),

   /*
   |--------------------------------------------------------------------------
   | Session Lifetime
   |--------------------------------------------------------------------------
   |
   | Here you may specify the number of minutes that you wish the session
   | to be allowed to remain idle before it expires. If you want them
   | to immediately expire on the browser closing, set that option.
   |
   */

   'lifetime' => env('SESSION_LIFETIME', 120),

   'expire_on_close' => false,

   'encrypt' => false,

   'connection' => env('SESSION_CONNECTION', 'session'),

   'store' => env('SESSION_STORE', null),

   /*
   |--------------------------------------------------------------------------
   | Session Sweeping Lottery
   |--------------------------------------------------------------------------
   |
   | Some session drivers must manually sweep their storage location to get
   | rid of old sessions from storage. Here are the chances that it will
   | happen on a given request. By default, the odds are 2 out of 100.
   |
   */

   'lottery' => [2, 100],

   /*
   |--------------------------------------------------------------------------
   | Session Cookie Name
   |--------------------------------------------------------------------------
   |
   | Here you may change the name of the cookie used to identify a session
   | instance by ID. The name specified here will get used every time a
   | new session cookie is created by the framework for every driver.
   |
   */

   'cookie' => env(
      'SESSION_COOKIE',
      Str::slug(env('APP_NAME', 'laravel'), '_') . '_session'
   ),

   /*
   |--------------------------------------------------------------------------
   | Session Cookie Path
   |--------------------------------------------------------------------------
   |
   | The session cookie path determines the path for which the cookie will
   | be regarded as available. Typically, this will be the root path of
   | your application but you are free to change this when necessary.
   |
   */

   'path' => '/',

   /*
   |--------------------------------------------------------------------------
   | Session Cookie Domain
   |--------------------------------------------------------------------------
   |
   | Here you may change the domain of the cookie used to identify a session
   | in your application. This will determine which domains the cookie is
   | available to in your application. A sensible default has been set.
   |
   */

   'domain' => env('SESSION_DOMAIN', null),

   /*
   |--------------------------------------------------------------------------
   | HTTPS Only Cookies
   |--------------------------------------------------------------------------
   |
   | By setting this option to true, session cookies will only be sent back
   | to the server if the browser has a HTTPS connection. This will keep
   | the cookie from being sent to you if it can not be done securely.
   |
   */

   'secure' => env('SESSION_SECURE_COOKIE'),

   /*
   |--------------------------------------------------------------------------
   | HTTP Access Only
   |--------------------------------------------------------------------------
   |
   | Setting this value to true will prevent JavaScript from accessing the
   | value of the cookie and the cookie will only be accessible through
   | the HTTP protocol. You are free to modify this option if needed.
   |
   */

   'http_only' => true,

   /*
   |--------------------------------------------------------------------------
   | Same-Site Cookies
   |--------------------------------------------------------------------------
   |
   | This option determines how your cookies behave when cross-site requests
   | take place, and can be used to mitigate CSRF attacks. By default, we
   | will set this value to "lax" since this is a secure default value.
   |
   | Supported: "lax", "strict", "none", null
   |
   */

   'same_site' => 'lax',

];

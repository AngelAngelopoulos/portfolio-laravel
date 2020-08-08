<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

        'gcs' => [

            'driver' => 'gcs',
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', 'servidorprueba-284400'),
            'key_file' => //env('GOOGLE_CLOUD_KEY_FILE', null), // optional: /path/to/service-account.json
                [
                "type" => "service_account",
                  "project_id" => "servidorprueba-284400",
                  "private_key_id" => "4b6277bfd37b4c66ed06b1a6bccf2874b63347df",
                  "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCzMHQMTCYt2Flo\ngzH5Jq2z3qw5xYe961J+vTPBaOE7Vta7osDvDN0dsH0VtS0Ko68hPM5tB6vLmELr\nfdIaYgO/3XlUHrR7o8AQOxp+4XyArt7TRrgUt/P+RGQ0XIywISq/l+om5xeLgRvZ\nDh2HEgDk/Tez8+pqURdD27s8CviAf5R1pmE7w8IyIcCQd0tKwkPk56CpOMUSQoha\nUFgxxlmephofF5hbrTaEHLFIDZJKFej97Xw0tXbjSl9y7vDanKiAPYQc51OJG6I8\nqvuvx7LDQulkpYfZCbj2kqa12MH5Zw8arOTv4v2jVPZGACQFQ9FCWSD7Epa3HVJF\nh5qjzBFPAgMBAAECggEADRLMbLdDk9W0lDz6MOjjBHwLCb4BLNiV8LxCIerSf/9S\ndGcn92jzWv6s6aAJ1LxjgyPKFcdY/+Ywf7jy0szy5BU3DG2fEmQ8l5KQWNB/wm2/\nwR9oP866BQOdYfqcox8QXOErCsKSg7GcRAZVHi0wloRpA36YzD/1WBSYgQV14v4M\ncEIcceRwoXmRWVsI/f21Af8uy8zpEOLWSSJeIexiZvmRmUKM58AYs+5/3ERbye0c\nvOol5PvWaKujtF/mUWrknCZTBw8n3cfBfpqAfX9ka2EetxMVmnDM6jFVM9t3nugl\n+MdmjlhFclW6KFCu9s8x5kddBmarFkLE/jjhgJ/FbQKBgQDxJj4IZew5oxLpzc5m\nZ0bsTlTw0B38Zifui87VJc2Z89GglTr00hV2NcczNxubW4rt5q3oorAIWxKrZJ6n\ncF1e0mnj7820WuPqBw/oB8dkyZ+mRZIoG6Zyh1AQ8oTXO4BepTGSh/6xWruGlqpu\n5iQN3VgTETMihwyU7FbJBrQuwwKBgQC+OWZve3/30Z+6ClsHXeO+nUgykOwNBs4p\n6QbPug4X9jck+1TMvzZyALDJ6uuXIlIxdXv6u/vhdGDoqGwJawn80gy+N9oMIyDe\nw/fNcGE3QoDN6aCFl0ypkE6+fxvxQOzTek6gBnV0ii0ZYG0CU4EPedEllzlY/k7V\nA21HpEDChQKBgHIKpNFx6foD7cDWDGMPOlIsZS0RLu0bHo1IXsMcQpQo4xzvFdeL\ntoyVuCO3Tv30l8oUCnB254q8DyMwzXrfv7hFB8C8umothZU6S8JuU1SNqUuHoSwI\nj3mgFjQ9jKcAw59+vefPGpqjDwYCII2blrdb0vgJbUZJ2aBf+FbPLczjAoGBALwJ\nI5AKBapkBb8yY1852VngQbDyftQ1qO/W0Ivgf/QBx+r/ooiub1RsCFXgqbeBDryj\nRMXKsybfEriJXBpHO901ibEyppEe3Gw4TSk/8GlejNJ/IdVMhVSMOLqoDWgC5Nf7\na+NV3x8vQ3t1TOxivQ4ePbcp8F9fK2/3bjvGStm9AoGAFQx1f/mxtfrIz1b+gdMs\nnU8TrXKpwpTLMXstFLxp9Kb5fxjjRND9vqIq7ifVSs8mn8B2YUXmIUaY1ZgStK8m\n678hqPolylYG5pgw/At/07V3OLpLqhpJGpnnvu9DYvkIX96updmTebMrAs8zW1lb\nwb3WHwLDRACtlhKz6xGmK4U=\n-----END PRIVATE KEY-----\n",
                  "client_email" => "servidorprueba-284400@appspot.gserviceaccount.com",
                  "client_id"=> "116519919591141531288",
                  "auth_uri"=> "https://accounts.google.com/o/oauth2/auth",
                  "token_uri"=> "https://oauth2.googleapis.com/token",
                  "auth_provider_x509_cert_url"=> "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url"=> "https://www.googleapis.com/robot/v1/metadata/x509/servidorprueba-284400%40appspot.gserviceaccount.com"
                  ],
            'bucket' => env('GOOGLE_CLOUD_STORAGE_BUCKET', 'servidorprueba-284400.appspot.com'),
            'path_prefix' => env('GOOGLE_CLOUD_STORAGE_PATH_PREFIX', null), // optional: /default/path/to/apply/in/bucket
            'storage_api_uri' => env('GOOGLE_CLOUD_STORAGE_API_URI', null), // see: Public URLs below
            'visibility' => 'public', // optional: public|private
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

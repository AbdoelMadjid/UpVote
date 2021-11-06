<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super-administrator' => [
            'users' => 'c,r,u,d',
            'candidates' => 'c,r,u,d',
            'group' => 'c,r,u,d',
            'settings' => 'r,u',
            'livecount' => 'r,u',
            'summary' => 'r,u',
            'profile' => 'r,u'
        ],
        'participant' => [
            'form' => 'p',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'p' => 'pilih'
    ]
];

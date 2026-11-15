<?php

return [
    'event' => [
        'name' => env('HUNTBAZAAR_EVENT_NAME', 'HUNTBAZAAR'),
        'date' => env('HUNTBAZAAR_EVENT_DATE'),
        'timezone' => env('HUNTBAZAAR_EVENT_TIMEZONE', 'Asia/Jakarta'),
        'start_at' => env('HUNTBAZAAR_EVENT_START_AT'),
        'venue' => env('HUNTBAZAAR_EVENT_VENUE'),
    ],

    'deadline' => [
        'technical_test_received_at' => env('HUNTBAZAAR_TECHNICAL_TEST_RECEIVED_AT'),
        'override_at' => env('HUNTBAZAAR_REGISTRATION_DEADLINE_AT'),
        'timezone' => env('HUNTBAZAAR_DEADLINE_TIMEZONE', 'Asia/Jakarta'),
        'calculation' => env('HUNTBAZAAR_DEADLINE_CALCULATION', 'one_calendar_month'),
    ],
];

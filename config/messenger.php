<?php

use Cmgmyr\Messenger\Models\Thread;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;

return [

    // 'user_model' => App\Models\User::class,

    'message_model' => Message::class,

    'participant_model' => Participant::class,

    'thread_model' => Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => 'messenger_messages',
    'participants_table' => 'messenger_participants',
    'threads_table' => 'messenger_threads',
];

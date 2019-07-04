<?php

return [
    'setup' => [

        /**
         * Module Name
         */
        'module_name' => 'SentEmails',

        /**
         * Singular module Name
         */
        'singular_name' => 'SentEmail',

        /**
         * If set to true. Visibility of records in module will be limited with "Assigned TO" field (User or Group)
         */
        'entity_private_access' => false,

        /**
         * Entities definition
         */
        'entity' => [
            'sent_email' => [

                /**
                 * Entity name
                 */
                'name' => 'SentEmail',

                /**
                 * Entity database table name
                 */
                'table' => 'sent_email',

                /**
                 * main - Main entity of module.
                 * settings - Dictionary entity of module
                 */
                'type' => 'main',

                /**
                 * HasMorphOwner trait will be added to entity
                 */
                'ownable' => false,

                /**
                 * LogsActivity trait will be added to entity
                 */
                'activity' => false,

                /**
                 * Commentable trait will be added to entity
                 */
                'comments' => true,

                /**
                 * HasAttachment trait will be added to entity
                 */
                'attachments' => true,

                'properties' => [

                    /**
                     * Definition of section in show|create|edit
                     */
                    'information' => [

                        'to' => [
                            'type' => 'string',
                            'rules' => 'required',
                        ],
                        'cc' => [
                            'type' => 'string',
                        ],
                        'bcc' => [
                            'type' => 'string',
                        ],
                        'subject' => [
                            'type' => 'string'
                        ],
                        'message' => [
                            'type' => 'text'
                        ],

                        'contact_id' => [
                            'type' => 'manyToOne', // Relation Type
                            'relation' => 'contact', // relation name
                            'display_column' => 'full_name', // Visible field in form and show view
                            'belongs_to' => 'Contact' // Belongs To
                        ],

                        'lead_id' => [
                            'type' => 'manyToOne', // Relation Type
                            'relation' => 'lead', // relation name
                            'display_column' => 'full_name', // Visible field in form and show view
                            'belongs_to' => 'Lead' // Belongs To
                        ],
                    ],

                ]
            ],
        ]

    ]
];

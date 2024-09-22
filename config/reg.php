<?php

$fields = [ 
    'name' => [ 
        'attribute' => [ 
            'type'        => 'text',
            'value'       => '',
            'placeholder' => 'Name *',
            'name'        => 'name',
        ],
        'rules'     => [ 
            'required' => true,
            'min'      => 2,
        ],
        'email'     => [ 
            'attribute' => [ 
                'type'        => 'email',
                'value'       => '',
                'placeholder' => 'Email *',
                'name'        => 'email',
            ],
            'rules'     => [ 
                'required' => true,
                'email'    => true,
            ],
        ],
    ],

];
return [ 
    'formAttribute' => [ 
        'name'    => 'register',
        'action ' => 'index.php',
        'method'  => 'post',
    ],
    'fields'        => $fields,
    'status'        => false,
];

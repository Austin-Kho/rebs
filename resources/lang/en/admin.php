<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'rebs-company' => [
        'title' => 'Rebs Companies',

        'actions' => [
            'index' => 'Rebs Companies',
            'create' => 'New Rebs Company',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'registration_number' => 'Registration number',
            'ceo' => 'Ceo',
            'business_number' => 'Business number',
            'business_type' => 'Business type',
            'sectors' => 'Sectors',
            'main_tel' => 'Main tel',
            'main_fax' => 'Main fax',
            'establishment_date' => 'Establishment date',
            'opening_date' => 'Opening date',
            'tax_invoice_email' => 'Tax invoice email',
            'tax_office' => 'Tax office',
            'postcode' => 'Postcode',
            'address' => 'Address',
            'detail_address' => 'Detail address',
            'extra_address' => 'Extra address',
            
        ],
    ],

    'rebs-department' => [
        'title' => 'Rebs Departments',

        'actions' => [
            'index' => 'Rebs Departments',
            'create' => 'New Rebs Department',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'rebs_company_id' => 'Rebs company',
            'name' => 'Name',
            'description' => 'Description',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
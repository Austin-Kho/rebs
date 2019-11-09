<?php

return [
    'admin-user' => [
        'title' => '사용자',

        'actions' => [
            'index' => '사용자 목록',
            'create' => '사용자 추가',
            'edit' => ':name 프로필 변경',
            'edit_profile' => '프로필 변경',
            'edit_password' => '패스워드 변경',
        ],

        'columns' => [
            'id' => "아이디 (ID)",
            'first_name' => "이름 (First name)",
            'last_name' => "성 (Last name)",
            'email' => "이메일 (Email)",
            'password' => "패스워드 (Password)",
            'password_repeat' => "패스워드 확인 (Confirm)",
            'activated' => "활성 (Activated)",
            'forbidden' => "정지 (Forbidden)",
            'language' => "언어 (Language)",

            //Belongs to many relations
            'roles' => "역할 (Roles)",

        ],
    ],

    'rebs-company' => [
        'title' => '회사 정보 관리',

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

    // Do not delete me :) I'm used for auto-generation
];

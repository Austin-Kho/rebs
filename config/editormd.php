<?php
return [
    'upload_path' => 'images/',
    'upload_type' => '',// 업로드 방법 기본값은 local
    'upload_http' => 'https',//https, http
    //本地:'',七牛:'qiniu'
    'width' => '100%',
    'height' => '500',
    'theme' => 'default',// default, dark
    'editorTheme' => 'default',// default, pastel-on-dark 주: vendor/editormd/lib/theme 아래 css 파일
    'previewTheme' => 'default',// default,dark,
    'flowChart' => 'true',
    'tex' => 'true',
    'searchReplace' => 'true',
    'saveHTMLToTextarea' => 'true',
    'codeFold' => 'true',
    'emoji' => 'true',
    'toc' => 'true',  //디렉토리
    'tocm' => 'true',  //디렉토리 드롭다운 메뉴
    'taskList' => 'true',  //작업 목록
    'imageUpload' => 'true',
    'sequenceDiagram' => 'true',
];

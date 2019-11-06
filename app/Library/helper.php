<?php

/**
 * ------------------------------------------------------
 * helper using Docs
 * ------------------------------------------------------
 */

/** Docs helpers */
if (!function_exists('markdown')) {
    /**
     * Compile Markdown to HTML.
     *
     * @param string|null $text
     * @return string
     */
    function markdown($text = null)
    {
        return app(ParsedownExtra::class)->text($text);
    }
}

if (!function_exists('link_for_sort')) {
    /**
     * Build HTML anchor tag for sorting
     *
     * @param string $column
     * @param string $text
     * @param array  $params
     * @return string
     */
    function link_for_sort($column, $text, $params = [])
    {
        $direction = request()->input('order');
        $reverse = ($direction == 'asc') ? 'desc' : 'asc';

        if (request()->input('sort') == $column) {
            // Update passed $text var, only if it is active sort
            $text = sprintf(
                "%s %s",
                $direction == 'asc'
                    ? '<i class="fa fa-sort-alpha-asc"></i>'
                    : '<i class="fa fa-sort-alpha-desc"></i>',
                $text
            );
        }

        $queryString = http_build_query(array_merge(
            request()->except(['sort', 'order']),
            ['sort' => $column, 'order' => $reverse],
            $params
        ));

        return sprintf(
            '<a href="%s?%s">%s</a>',
            urldecode(request()->url()),
            $queryString,
            $text
        );
    }
}

if (!function_exists('attachments_path')) {
    /**
     * Generate attachments path.
     *
     * @param string $path
     * @return string
     */
    function attachments_path($path = null)
    {
        return public_path('assets/docs/img' . ($path ? DIRECTORY_SEPARATOR . $path : $path));
    }
}

if (!function_exists('format_filesize')) {
    /**
     * Calculate human-readable file size string.
     *
     * @param $bytes
     * @return string
     */
    function format_filesize($bytes)
    {
        if (!is_numeric($bytes)) return 'NaN';

        $decr = 1024;
        $step = 0;
        $suffix = ['bytes', 'KB', 'MB'];

        while (($bytes / $decr) > 0.9) {
            $bytes = $bytes / $decr;
            $step++;
        }

        return round($bytes, 2) . $suffix[$step];
    }
}

if (!function_exists('cache_key')) {
    /**
     * 캐쉬 키 생성 함수
     *
     * @param [type] $base
     * @return string
     */
    function cache_key($base)
    {
        $key = ($uri = request()->getQueryString())
            ? $base . '.' . urlencode($uri)
            : $base;

        return md5($key);
    }
}

if (!function_exists('taggable')) {
    /**
     * 캐시태그 사용가능여부 확인 함수
     *
     * @return boolean
     */
    function taggable()
    {
        return in_array(config('cache.default'), ['memcached', 'redis'], true);
    }
}

if (!function_exists('cut_string')) {
    /**
     * [cut_string 문자열 자르기 함수]
     * @param  [String] $string  [자를 문자열]
     * @param  [Int] $length  [자르려는 문자 길이]
     * @param  [String] $suffix  [자른 후 붙이는 문자]
     * @param  [type] $charset [캐릭터셋 - 미지정시 UTF-8]
     * @return [String]          [함수 적용 문자열]
     */
    function cut_string($string, $length, $suffix, $charset = null)
    {
        if ($charset == null) {
            $charset = 'UTF-8';
        }
        /* 정확한 문자열의 길이를 계산하기 위해, mb_strlen 함수를 이용 */
        $str_len = mb_strlen($string, 'UTF-8');
        if ($str_len > $length) {
            /* mb_substr  PHP 4.0 이상, iconv_substr PHP 5.0 이상 */
            $string = iconv_substr($string, 0, $length, 'UTF-8');
            $string .= $suffix;
        }
        return $string;
    }
}


/**
 * ------------------------------------------------------
 * helper using Home
 * ------------------------------------------------------
 */

if (!function_exists('set_active')) {
    /**
     * Undocumented function
     *
     * @param [type] $path
     * @param string $active
     * @return void
     */
    function set_active($path, $active = 'active')
    {
        return call_user_func_array('Request::is', (array) $path) ? $active : '';
    }
}


/**
 * ------------------------------------------------------
 * helper using Rebs
 * ------------------------------------------------------
 */

if (!function_exists('jwt')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt () {
        return app('tymon.jwt.auth');
    }
}

if (!function_exists('is_api_domain')) {
    /**
     * @return bool
     */
    function is_api_domain ()
    {
        return starts_with(request()->getHttpHost(), config('settings.api_domain'));
    }
}

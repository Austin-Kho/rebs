<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $cache;

    public function __construct()
    {
        $this->cache = app('cache');

        if ((new \ReflectionClass($this))->implementsInterface(Cacheable::class) and taggable()) {
            $this->cache = app('cache')->tags($this->cacheTags());
        }
    }

    /**
     * Execute caching against database query.
     *
     * @see config/project.php's cache section.
     *
     * @param [type] $key        // 캐시 키
     * @param [type] $minutes    // 캐시 유효 기간
     * @param [type] $query      // 쿼리
     * @param [type] $method     // 쿼리->get()..first()..paginate() 등 메소드
     * @param [type] ...$arg     // 배열...현재 n 번째 이후 모든 인자를 요소로 하는 배열 인자(php5.6 이상..이전 버전은 배열로 삽입)
     * @return mixed
     */
    protected function cache($key, $minutes, $query, $method, ...$args)
    {
        $args = (!empty($args)) ? implode(',', $args) : null;

        if (config('settings.cache') === false) {
            return $query->{$method}($args);
        }

        return $this->cache->remember($key, $minutes, function () use ($query, $method, $args) {
            return $query->{$method}($args);
        });
    }
}

<?php
/**
 * User: aogg
 * Date: 2020/9/2
 */

namespace aogg\think\migration\extend;


class RootPath
{
    public static $rootPath = 'app/modules/**/';

    /**
     * @param string $rootPath
     */
    public static function setRootPath(string $rootPath)
    {
        self::$rootPath = $rootPath;
    }

    /**
     * @return string
     */
    public function getRootPath()
    {
        return static::$rootPath;
    }


}
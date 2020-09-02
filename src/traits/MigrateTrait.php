<?php
/**
 * User: aogg
 * Date: 2020/9/2
 */

namespace aogg\think\migration\extend\traits;


trait MigrateTrait
{
    use CommonTrait;


    protected function getPath()
    {
        return $this->getRootPath() . 'database' . DIRECTORY_SEPARATOR . 'migrations';
    }


}
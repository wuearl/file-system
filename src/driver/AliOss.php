<?php
/**
 * Created by PhpStorm.
 * User: wuliangbo
 * Date: 2019/11/19
 * Time: 09:05
 */

namespace think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;
use Xxtime\Flysystem\Aliyun\OssAdapter;

class AliOss extends Driver
{
    protected function createAdapter(): AdapterInterface
    {
        return new OssAdapter([
            'accessId'       => $this->config['accessKey'],
            'accessSecret'   => $this->config['secretKey'],
            'bucket'         => $this->config['bucket'],
            'endpoint'       => $this->config['endpoint'],
            'isCName'        => $this->config['isCName'],
        ]);
    }
}
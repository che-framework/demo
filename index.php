<?php
/**
 * Created by VSCode.
 * User: che
 * Date: 2018/7/22
 * Time: 21:04
 */
require_once './vendor/autoload.php'; // 加载自动加载文件

use Flower\Rose\Rose;
use Flower\Lily\Lily;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$rose = new Rose();
$lily = new Lily();

echo "Test private library >>>";
echo $rose->desc();
echo "\n";
echo $lily->desc();

echo "\n";
echo "Test public library >>>";
echo "Log...";
// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('my.log', Logger::WARNING));
// add records to the log
$log->info('Foo');
$log->err('Bar');
<?php
require_once './vendor/autoload.php';
/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class UnitTestCase extends PHPUnit\Framework\TestCase
{
    public function test_running()
    {
    }

    protected function unProtectMethod($name, $class)
    {
        $class = new \ReflectionClass(get_class($class));
        $method = $class->getMethod($name);
        $method->setAccessible(true);

        return $method;
    }
}

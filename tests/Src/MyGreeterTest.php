<?php
/**
 * Created by chenchun
 * User: chenchun
 * Date: 2024/8/27
 * Time: 上午11:33
 */

//使用PHPUnit框架编写的Calculator类的测试用例
use PHPUnit\Framework\TestCase;
use Src\MyGreeter;

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    //测试方法
    public function test_init()
    {
        //PHPUnit 断言函数
        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    //测试方法
    public function testGreeting()
    {
        //PHPUnit 断言函数
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
    }

    //测试方法
    public function testGreet()
    {
        //PHPUnit 断言函数
        $this->assertEquals(
            'Hello,World',
            $this->greeter->greet('World')
        );
    }
}

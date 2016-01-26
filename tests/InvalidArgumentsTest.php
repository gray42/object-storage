<?php

class InvalidArgumentsTest extends PHPUnit_Framework_TestCase
{

    /**
     * @runInSeparateProcess
     */
    public function testInvalidArgumentsInConstructor()
    {
        $this->setExpectedException('InvalidArgumentException');
        new ObjectStorage(1);
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey1()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => '.',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey2()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => '..',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey3()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => '/',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey4()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => './key',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey5()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => '../key',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey6()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'key/.',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey7()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'key/..',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey8()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => '/key',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey9()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'key/',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey10()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'key/./key',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey11()
    {
        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'key/../key',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey12()
    {

        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'invalid?',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidKey13()
    {

        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => '',
                    'data' => 'data'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidMetadata1()
    {

        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'test',
                    'metadata.' => '1'
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidMetadata2()
    {

        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'test',
                    'metadata.name' => 1
                ]
        );
    }

    /**
     * @runInSeparateProcess
     */
    public function testInvalidMetadata3()
    {

        $objectStorage = getInstance();
        $this->setExpectedException('InvalidArgumentException');
        $objectStorage->set(
                [
                    'key' => 'test',
                    'metadata.na$me' => '1'
                ]
        );
    }

}

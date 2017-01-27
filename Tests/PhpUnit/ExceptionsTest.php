<?php
namespace Apatis\Exceptions\Tests\PhpUnit;

use Apatis\Exceptions\Exception;

/**
 * Class ExceptionsTest
 * @package Apatis\Exceptions\Tests\PhpUnit
 */
class ExceptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Exception
     */
    protected $exception;

    /**
     * {@inheritdoc}
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->exception = new Exception(
            'Example Message',
            E_USER_NOTICE,
            new Exception(
                'Example Message',
                E_USER_NOTICE
            )
        );
    }

    public function testInstance()
    {
        $this->assertInstanceOf(
            Exception::class,
            $this->exception
        );
    }

    public function testException()
    {
        $this->assertEquals(
            $this->exception->getCode(),
            E_USER_NOTICE
        );
    }

    public function testCatch()
    {
        try {
            throw $this->exception;
        } catch (Exception $e) {
            $this->assertEquals(
                $e->getMessage(),
                $this->exception->getMessage()
            );
        }

        try {
            throw $this->exception;
        } catch (\InvalidArgumentException $e) { // ignore
            // ignore
        } catch (\Throwable $e) {
            $this->assertEquals(
                $e->getMessage(),
                $this->exception->getMessage()
            );
        }

        try {
            throw $this->exception;
        } catch (\Throwable $e) {
            $this->assertEquals(
                $this->exception->getFile(),
                $e->getFile()
            );
        } finally {
            $this->assertNotEmpty(
                $e->getMessage()
            );
        }
    }
}

<?php
namespace Mongolid;

use TestCase;
use Mockery as m;
use Mongolid\Container\Ioc;

class DynamicSchemaTest extends TestCase
{
    public function tearDown()
    {
        parent::tearDown();
        m::close();
    }

    public function testShouldBeDynamic()
    {
        // Arrange
        $schema = m::mock('Mongolid\DynamicSchema[]');

        // Assert
        $this->assertAttributeEquals(true, 'dynamic', $schema);
    }
}

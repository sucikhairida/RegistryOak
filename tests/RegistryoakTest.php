<?php
/**
 * Tests for RegistryOak
 */

use PHPUnit\Framework\TestCase;
use Registryoak\Registryoak;

class RegistryoakTest extends TestCase {
    private Registryoak $instance;

    protected function setUp(): void {
        $this->instance = new Registryoak(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Registryoak::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

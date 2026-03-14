<?php
/**
 * Tests for GraphqlFederation
 */

use PHPUnit\Framework\TestCase;
use Graphqlfederation\Graphqlfederation;

class GraphqlfederationTest extends TestCase {
    private Graphqlfederation $instance;

    protected function setUp(): void {
        $this->instance = new Graphqlfederation(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Graphqlfederation::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

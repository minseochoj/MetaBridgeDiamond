<?php
/**
 * Tests for MetaBridgeDiamond
 */

use PHPUnit\Framework\TestCase;
use Metabridgediamond\Metabridgediamond;

class MetabridgediamondTest extends TestCase {
    private Metabridgediamond $instance;

    protected function setUp(): void {
        $this->instance = new Metabridgediamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Metabridgediamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

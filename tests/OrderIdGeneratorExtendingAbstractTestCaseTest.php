<?php declare(strict_types=1);

final class OrderIdGeneratorExtendingAbstractTestCaseTest extends AbstractTestCase
{
    public function testGenerateGeneratesId(): void
    {
        $this->assertStringIsOrderId('htyv4567-hg57');
    }
}
<?php

namespace OpenFoodFacts\Laravel\Tests;

use OpenFoodFacts\Document;
use OpenFoodFacts\Laravel\Facades\OpenFoodFacts;

class FacadeBridgeToApiTest extends Base\FacadeTestCase
{
    /** @test */
    public function it_calls_method_on_vendor_apiclass(): void
    {
        $doc = OpenFoodFacts::getProduct('0737628064502');

        /** @phpstan-ignore-next-line - will always evaluate to true due docblock */
        $this->assertInstanceOf(Document::class, $doc);
    }
}

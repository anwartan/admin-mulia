<?php

namespace Tests\Feature;


use App\Services\ProductService;

use Tests\TestCase;

class ProductServiceTest extends TestCase
{

    private ProductService $productService;

    protected function setUp():void
    {
        parent::setUp();

        $this->productService = $this->app->make(ProductService::class);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
      self::assertTrue(true);
    }
}

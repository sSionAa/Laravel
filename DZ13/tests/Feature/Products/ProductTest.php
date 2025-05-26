<?php

namespace Tests\Feature\Products;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_products_can_be_indexed(): void
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }
    public function test_product_can_be_shown(): void
    {
        $response = $this->get('/api/products/1');

        $response->assertStatus(200);
    }
    public function test_product_can_be_stored(): void
    {
        $response = $this->get('/api/products/?sku=Morgan&J.P.Morgan&price=1750');

        $response->assertStatus(200);
    }
    public function test_product_can_be_updated(): void
    {
        $response = $this->get('/api/products/9?sku=Freeman&G.Freeman&price=1720');

        $response->assertStatus(200);
    }
    public function test_product_can_be_destroyed(): void
    {
        $response = $this->get('/api/products/8');

        $response->assertStatus(200);
    }
}


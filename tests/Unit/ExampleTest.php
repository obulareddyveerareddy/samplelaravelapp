<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Product;
use App\Description;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    use JsonHeaders;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    
    public function testProductsList(){
        $products = factory(Product::class, 3)->create();
        $response = $this->get('/api/products');
        $response->assertStatus(200);
    }
    
    // public function testProductDescriptions(){
    //     $products = factory(Product::class, 3)->create();
    //     $products->descriptions->saveMany(factory(Description::class, 3)->make());
        
    //     // $response = $this->get('/api/products/1/descriptions');
    //     // $response->assertStatus(200);
    // }
    
    public function testProductCreation(){
        $product = factory(Product::class)->make(['name'=>'beats']);
        $this->post(route('app.products.store'), $product->jsonSerialize(), $this->jsonHeaders)
             ->seeInDatabase('products', ['name'=>$product->name]);
    }
}

<?php

namespace Tests\Feature;

use App\Filament\Resources\IngredientResource;
use App\Filament\Resources\OrderResource;
use App\Filament\Resources\ProductResource;
use App\Models\User;
use Filament\Pages\Dashboard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->seed();
        $user = User::first();
        $this->actingAs($user);
    }

    public function test_is_dashboard_page_work()
    {
        $response = $this->get(Dashboard::getUrl());

        $response->assertStatus(200);
    }
    public function test_is_orders_page_work()
    {
        $response = $this->get(OrderResource::getUrl('index'));

        $response->assertStatus(200);
    }
    public function test_is_products_page_work()
    {
        $response = $this->get(ProductResource::getUrl('index'));

        $response->assertStatus(200);
    }
    public function test_is_ingredients_page_work()
    {
        $response = $this->get(IngredientResource::getUrl('index'));

        $response->assertStatus(200);
    }

}

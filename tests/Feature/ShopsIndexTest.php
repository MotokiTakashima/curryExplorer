<?php

namespace Tests\Feature;

use App\Models\Shops;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShopsIndexTest extends TestCase
{

    use RefreshDatabase;
    
    /**
     * @test
     */
    public function ステータス200が返ること(): void
    {
        $response = $this->get(route('shops.index'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function 店舗一覧が表示されること(): void
    {
        shops::create(['name' => '山田カレー', 'address' => '日本']);
        shops::create(['name' => '田中カレー', 'address' => 'アメリカ']);
        shops::create(['name' => '鈴木カレー', 'address' => 'フランス']);

        $this->get(route('shops.index'))
            ->assertSeeInOrder([
                '山田カレー',
                '田中カレー',
                '鈴木カレー',
            ])
            ->assertSeeInOrder([
                '日本',
                'アメリカ',
                'フランス',
            ]);
    }
}

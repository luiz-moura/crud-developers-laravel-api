<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

function nivel()
{
    return ['nome' => 'Master'];
}

class NiveisTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_new_nivel()
    {
        $response = $this->postJson('/niveis', nivel());

        $response->assertStatus(201)->assertJsonFragment(nivel());
    }

    public function test_list_niveis()
    {
        // Cria o nivel Master
        $this->postJson('/niveis', nivel());

        $this->get('/niveis')
            ->assertStatus(200)
            ->assertJsonFragment(nivel());
    }

    public function test_show_nivel()
    {
        // Cria o nivel Master
        $response = $this->postJson('/niveis', nivel());

        $this->get("/niveis/{$response['data']['id']}")
            ->assertStatus(200)
            ->assertJsonFragment(nivel());
    }

    public function test_update_nivel()
    {
        // Cria o nivel Master
        $response = $this->postJson('/niveis', nivel());

        $response = $this->putJson("/niveis/{$response['data']['id']}", ['nome' => 'Master Plus']);

        $response->assertStatus(200)->assertJsonFragment(['nome' => 'Master Plus']);
    }

    public function test_delete_nivel_with_delevepers()
    {
        // Cria o nivel Master
        $response = $this->postJson('/niveis', nivel());

        $response = $this->delete("/niveis/{$response['data']['id']}");

        $response->assertStatus(501);
    }
}

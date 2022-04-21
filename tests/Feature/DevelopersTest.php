<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

function developer($nivelId)
{
    return [
        'nivel_id'          => $nivelId,
        'nome'              => 'Luiz Moura',
        'sexo'              => 'masculino',
        'data_nascimento'   => '1999-03-13',
        'hobby'             => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    ];
}

class DevelopersTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_new_developer()
    {
        // Cria o nivel Master
        $responseNivel = $this->postJson('/niveis', nivel());

        $responseDeveloper = $this->postJson('/desenvolvedores', developer($responseNivel['data']['id']));

        $responseDeveloper->assertStatus(201)->assertJsonFragment($responseDeveloper['data']);
    }

    public function test_list_developers()
    {
        // Cria o nivel Master
        $responseNivel = $this->postJson('/niveis', nivel());

        // Cria o dev
        $this->postJson('/desenvolvedores', developer($responseNivel['data']['id']));

        $this->get('/desenvolvedores')
            ->assertStatus(200)
            ->assertJsonFragment(developer($responseNivel['data']['id']));
    }

    public function test_show_developer()
    {
        // Cria o nivel Master
        $responseNivel = $this->postJson('/niveis', nivel());

        // Cria o dev
        $responseDeveloper = $this->postJson('/desenvolvedores', developer($responseNivel['data']['id']));

        $this->get("/desenvolvedores/{$responseDeveloper['data']['id']}")
            ->assertStatus(200)
            ->assertJsonFragment($responseDeveloper['data']);
    }

    public function test_update_developer()
    {
        // Cria o nivel Master
        $responseNivel = $this->postJson('/niveis', nivel());

        // Cria o dev
        $responseDeveloper = $this->postJson('/desenvolvedores', developer($responseNivel['data']['id']));

        $response = $this->putJson("/desenvolvedores/{$responseDeveloper['data']['id']}", [
            'nome'              => 'Luiz Henrique',
            'sexo'              => 'masculino',
            'data_nascimento'   => '1999-03-14',
            'hobby'             => 'Codar =)',
        ]);

        $response->assertStatus(200)->assertJsonFragment([
            'nome'              => 'Luiz Henrique',
            'sexo'              => 'masculino',
            'data_nascimento'   => '1999-03-14',
            'hobby'             => 'Codar =)',
        ]);
    }

    public function test_delete_developer()
    {
        // Cria o nivel Master
        $responseNivel = $this->postJson('/niveis', nivel());

        // Cria o dev
        $response = $this->postJson('/desenvolvedores', developer($responseNivel['data']['id']));

        $this->delete("/desenvolvedores/{$response['data']['id']}")
            ->assertStatus(204);
    }
}

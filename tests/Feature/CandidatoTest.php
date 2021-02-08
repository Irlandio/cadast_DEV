<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_given_user_not_loggedin_when_access_restritec_page_then_redirect_login()
    {
        $response = $this->get('/books')
         ->assertRedirect('/login');

    }
    public function test_campos_obrigatorios()
    {
       $user = factory(User::class)->create();        
        $response = $this->actingAs($user)->get('/books');
        $token = session('_token');
        $response = $this->actingAs($user)->withSession(['banned' => false])
                         ->post('/books', ['_token' => $token,]);       
        $response->assertSessionHasErrors([
		'nome','email1','linkedin','datNasc'
	   ]);
    }
    public function test_cadastro_sucesso()
    {
       $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/books');
        $token = session('_token');
        
        $response = $this->actingAs($user)->withSession(['banned' => false])
                         ->post('/books', ['_token' => $token,
                                            'nome'=>'Marlon Costa',
                                            'email1'=>'mac@gmail.com',
                                            'linkedin'=>'www.linkedin/in/Marl-Costa/4578554',
                                            'datNasc'=>'1983-05-02',
                                            'idade'=>'37',
                                            'tec'=>['PHP']]);        
        
        $response->assertSessionHasNoErrors();
        
        $this->assertDatabaseHas('candidatos', [
        'nome' => 'Marlon Costa',
        ]);
    }
}
/*

    $this->assertDatabaseHas('users', [
        'email' => 'sally@example.com',
    ]);
$response->assertSee("string de teste")
test_an_action_that_requires_authentication()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->withSession(['banned' => false])
                         ->get('/');
    }
*/
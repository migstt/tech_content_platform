<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\CreatesApplication;
use Tests\TestCase;

class UnitTest extends TestCase
{
    use RefreshDatabase;
    use CreatesApplication;
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }
    public function test_should_return_users_ordered_by_updated_at_descending()
    {
        // Arrange
        $expectedUsers = User::orderBy('updated_at', 'DESC')->paginate(10);

        // Act
        $actualUsers = User::getAllUsers();

        // Assert
        $this->assertEquals($expectedUsers, $actualUsers);
    }

    public function test_create_new_user_with_valid_data()
    {
        $name = 'John Doe';
        $email = 'johndoe@example.com';
        $avatar = 'https://example.com/avatar.jpg';

        $user = User::createNewUser($name, $email, $avatar);

        $this->assertInstanceOf(User::class, $user);
    }


    // TEST ROUTES THAT RETURN VIEWS
    public function test_route_returns_login_view()
    {
        $response = $this->get('/login');
        $response->assertViewIs('login');
    }

    public function test_route_returns_create_journal_view()
    {
        $response = $this->get(route('create'));
        $response->assertStatus(200);
    }

    public function test_route_returns_journals_view()
    {
        $response = $this->get('/');
        $response->assertViewIs('blogs');
    }

    function test_route_returns_authors_view()
    {
        $response = $this->get('/authors');
        $response->assertViewHas('authors');
    }


    // GOOGLE ROUTES TEST
    public function test_route_to_google_returns_successful_response()
    {
        $response = $this->get('/auth/google');
        $response->assertStatus(302);
    }

}

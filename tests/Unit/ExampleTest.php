<?php

namespace Tests\Unit;

use App\Models\Journal;
use App\Models\User;
use Mockery;
use Tests\TestCase;

class ExampleTest extends TestCase
{
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

}

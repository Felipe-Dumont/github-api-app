<?php

namespace Tests\Unit;

use App\DTO\UserDTO;
use PHPUnit\Framework\TestCase;

class UserDTOTest extends TestCase
{
    public function testCreateUserDTO()
    {
        $userData = [
            'name' => 'John Doe',
            'login' => 'johndoe',
            'avatar_url' => 'https://example.com/avatar.jpg',
            'public_repos' => 10,
            'email' => 'teste@email.com',
            'html_url' => 'https://github.com/johndoe',
            'created_at' => '2008-01-14T04:33:35Z',
        ];

        $userDTO = new UserDTO($userData);

        $this->assertInstanceOf(UserDTO::class, $userDTO);
        $this->assertEquals('John Doe', $userDTO->getName());
        $this->assertEquals('johndoe', $userDTO->getLogin());
        $this->assertEquals('https://example.com/avatar.jpg', $userDTO->getAvatarUrl());
        $this->assertEquals(10, $userDTO->getPublicRepos());
        $this->assertEquals("teste@email.com", $userDTO->getEmail());
        $this->assertEquals('https://github.com/johndoe', $userDTO->getHtmlUrl());
        $this->assertEquals('2008-01-14T04:33:35Z', $userDTO->getCreatedAt());
    }
}

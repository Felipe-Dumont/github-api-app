<?php

namespace App\DTO;

class UserDTO
{
    private $name;
    private $login;
    private $avatarUrl;
    private $publicRepos;
    private $email;
    private $htmlUrl;
    private $createdAt;

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? '';
        $this->login = $data['login'] ?? '';
        $this->avatarUrl = $data['avatar_url'] ?? '';
        $this->publicRepos = $data['public_repos'] ?? 0;
        $this->email = $data['email'] ?? '';
        $this->htmlUrl = $data['html_url'] ?? '';
        $this->createdAt = $data['created_at'] ?? '';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    public function getPublicRepos(): int
    {
        return $this->publicRepos;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getHtmlUrl(): string
    {
        return $this->htmlUrl;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
}

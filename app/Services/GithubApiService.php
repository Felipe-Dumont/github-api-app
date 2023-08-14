<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Exceptions\GithubApiException;
use Exception;

class GithubApiService
{
    public function getUser(string $username): UserDTO
    {
        $url = "https://api.github.com/users/{$username}";

        $options = $this->getOptions('GET');
        $context = stream_context_create($options);
        try {
            $response = file_get_contents($url, false, $context);
        } catch (Exception $e) {
            throw new GithubApiException($e->getMessage());
        }

        if (!$response) {
            throw new GithubApiException('Erro ao acessar a API do GitHub.');
        }

        $userData = json_decode($response, true);
        return new UserDTO($userData);
    }

    public function getUserRepositories(string $username)
    {
        $url = "https://api.github.com/users/{$username}/repos";

        $options = $this->getOptions('GET');
        $context = stream_context_create($options);
        try {
            $response = file_get_contents($url, false, $context);
        } catch (Exception $e) {
            throw new GithubApiException($e->getMessage());
        }

        if (!$response) {
            throw new GithubApiException('Erro ao acessar a API do GitHub.');
        }

        return json_decode($response, true);
    }

    private function getOptions(string $method): array
    {
        $options = [
            'http' => [
                'method' => $method,
                'header' => [
                    'User-Agent: MinhaApp/1.0',
                    'Accept: application/vnd.github+json'
                ],
            ],
        ];

        return $options;
    }
}

<?php

namespace App\Http\Controllers;

use App\Exceptions\GithubApiException;
use App\Services\GithubApiService;
use Illuminate\Http\Request;

class GithubUserController extends Controller
{
    protected $githubApiService;

    public function __construct(GithubApiService $githubApiService)
    {
        $this->githubApiService = $githubApiService;
    }

    public function index()
    {
        return view('index');
    }

    public function getUser(Request $request)
    {
        $username = $request->input('username');

        try {
            $user = $this->githubApiService->getUser($username);

            return view('user', compact('user'));
        } catch (GithubApiException $e) {
            return redirect()->route('index')->with('error', $e->getMessage());
        }
    }

    public function showRepositories(Request $request, $username)
    {
        try {
            $repositories = $this->githubApiService->getUserRepositories($username);

            return view('repositories', compact('username', 'repositories'));
        } catch (GithubApiException $e) {
            return redirect()->route('index')->with('error', $e->getMessage());
        }
    }
}

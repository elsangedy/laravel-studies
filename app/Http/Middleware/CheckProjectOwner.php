<?php

namespace CodeEducation\Http\Middleware;

use Closure;
use CodeEducation\Repositories\ProjectRepository;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class CheckProjectOwner
{
    private $repository;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($request, Closure $next)
    {
        $userId = Authorizer::getResourceOwnerId();
        $projectId = $request->project;

        if(!$this->repository->isOwner($projectId, $userId)) {
            return [];
        }

        return $next($request);
    }
}

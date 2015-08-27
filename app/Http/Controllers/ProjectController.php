<?php

namespace CodeEducation\Http\Controllers;

use CodeEducation\Repositories\ProjectRepository;
use CodeEducation\Services\ProjectService;
use Illuminate\Http\Request;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class ProjectController extends Controller
{
    private $repository;

    private $service;

    public function __construct(ProjectRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        return $this->repository->with(['client', 'user'])->findWhere(['owner_id' => Authorizer::getResourceOwnerId()]);
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function show($id)
    {
        if(!$this->checkProjectOwner($id)) {
            return ['error' => 'Acesso negado!'];
        }

        return $this->repository->find($id);
    }

    public function update(Request $request, $id)
    {
        if(!$this->checkProjectOwner($id)) {
            return ['error' => 'Acesso negado!'];
        }

        return $this->service->update($request->all(), $id);
    }

    public function destroy($id)
    {
        if(!$this->checkProjectOwner($id)) {
            return ['error' => 'Acesso negado!'];
        }

        return $this->service->delete($id);
    }

    private function checkProjectOwner($projectId)
    {
        return $this->repository->isOwner($projectId, Authorizer::getResourceOwnerId());
    }
}

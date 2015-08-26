<?php

namespace CodeEducation\Repositories;

use CodeEducation\Entities\Project;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    public function model() {
        return Project::class;
    }
}
<?php

namespace CodeEducation\Repositories;

use CodeEducation\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model() {
        return Client::class;
    }
}
<?php

namespace CodeEducation\Repositories;

use CodeEducation\Training;

use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class TrainingRepository
{

  private $training;

  public function __construct(Training $training)
  {
    $this->training = $training;
  }

  public function all()
  {
    return $this->training->where('personal_id', Authorizer::getResourceOwnerId())->get();
  }

}

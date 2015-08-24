<?php

namespace CodeEducation\Services;

use CodeEducation\Repositories\TrainingRepository;

class TrainingService
{

  private $trainingRespository;

  public function __construct(TrainingRepository $trainingRespository)
  {
    $this->trainingRespository = $trainingRespository;
  }

  public function create($data)
  {
    $training = $this->trainingRespository->create($data);

    // lógica

    return $training;
  }

}

<?php

namespace CodeEducation\Http\Controllers;

use CodeEducation\Repositories\TrainingRepository;
use CodeEducation\Services\TrainingService;

use Illuminate\Http\Request;

use CodeEducation\Http\Requests;
use CodeEducation\Http\Controllers\Controller;

class TrainingController extends Controller
{
  private $trainingRepository;

  public function __construct(TrainingRepository $trainingRepository)
  {
    $this->trainingRepository = $trainingRepository;
  }

  public function index()
  {
    return $this->trainingRepository->all();
  }

  public function show($id)
  {
    //
  }

  public function store(TrainingService $trainingService)
  {
    $trainingService->create($all);
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}

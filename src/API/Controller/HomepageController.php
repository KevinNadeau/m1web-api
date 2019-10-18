<?php

namespace App\API\Controller;

use App\API\Repository\CityRepository;
use App\API\Controller\AbstractController;

class HomepageController extends AbstractController
{

	private $cityRepository;

	public function __construct(CityRepository $cityRepository)
	{
		$this->cityRepository = $cityRepository;
	}


	public function index(array $uriVars = [])
	{
		//echo '<pre>';varDump($this->cityRepository->findAll());echo '<pre>';
		$this->render([
			'cities' => $this->cityRepository->findAll()
		]);
	}
}
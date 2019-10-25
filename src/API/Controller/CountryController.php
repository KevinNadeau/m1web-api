<?php

namespace App\API\Controller;

use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;
use App\API\Controller\AbstractController;

class CountryController
{

	private $countryRepository;

	public function __construct(CityRepository $cityRepository)
	{
		$this->cityRepository = $cityRepository;
	}


	public function index(array $uriVars = [])
	{
		//echo '<pre>';varDump($this->cityRepository->findAll());echo '<pre>';
		$this->render([
			'country' => $this->countryRepository->findAll()
		]);
	}
}
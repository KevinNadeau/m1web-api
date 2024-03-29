<?php

namespace App\API\Controller;

use App\API\Repository\CityRepository;
use App\API\Controller\AbstractController;
use App\API\Repository\CountryRepository;

class HomepageController extends AbstractController
{

	private $cityRepository;
	private $countryRepository;

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

	public function index1(array $uriVars = [])
	{
		//echo '<pre>';varDump($this->cityRepository->findAll());echo '<pre>';
		$this->render([
			'country' => $this->countryRepository->findAll()
			
		]);
	}
}
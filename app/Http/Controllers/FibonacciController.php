<?php

namespace App\Http\Controllers;

use App\FibonacciSeries;

class FibonacciController extends Controller
{
    public function show($count)
	{
		$fibonacciSeries = new FibonacciSeries([], $count);

		return view('fibonacci', [
			'fibonacciSeries' => implode(', ', $fibonacciSeries->getSeries())
		]);
	}
}

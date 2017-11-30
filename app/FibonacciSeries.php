<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FibonacciSeries extends Model
{
	private $series;

	public function __construct(array $attributes = [], $count)
	{
		parent::__construct($attributes);
		$this->calculate($count);
	}

	public function getSeries()
	{
		return is_null($this->series) ? [] : $this->series;
	}

    private function calculate($count = 1)
	{
		for($i = 1; $i <= $count; $i++)
			$this->series[] = $this->getFib($i);
	}

	private function getFib($n)
	{
		return (int)round(pow((sqrt(5) + 1)/2, $n) / sqrt(5));
	}
}

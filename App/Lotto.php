<?php

namespace App;

class Lotto {
	
	protected $min;
	protected $max;
	protected $count;
	protected $all_numbers = [];
	protected $min_index = 0;
	protected $max_index;
	
	public function __construct( $min, $max, $count )
	{
		$this->min = $min;
		$this->max = $max;
		$this->count = $count;
		$this->max_index = $max-1;
		$this->all_numbers = range($this->min, $this->max);
	}
	
	protected function pop($index)
	{
		$popped_number = $this->all_numbers[$index];
		$this->remove_a_number_from_numbers_array( $popped_number );
		$this->max_index--;
		return $popped_number;
	}
	
	protected function pop_random()
	{
		return $this->pop(mt_rand($this->min_index, $this->max_index));
	}
	
	public function run()
	{
		$result = [];
		for($x=0;$x<$this->count;$x++)
		{
			$result[] = $this->pop_random();
		}
		return $result;
	}
	
	protected function remove_a_number_from_numbers_array( $popped_number )
	{
		unset( $this->all_numbers[ $popped_number ] );
		$this->all_numbers = array_values( $this->all_numbers );
	}
}
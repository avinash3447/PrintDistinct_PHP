<?php
function findDistnctValues(array $arr)
	{
	$len = count($arr);
	$result = [];
  // need another array to track the occurrence of the element
	$tracker = [];
	for ($i = 0; $i < $len; $i++)
		{
		if (!in_array($arr[$i], $tracker))
			{
			$tracker[] = $arr[$i];
			$result[] = $arr[$i];
			}
		  else
			{
			$pos = array_search($arr[$i], $result);
			unset($result[$pos]);
			}
		}

	var_dump($result);
	return $result;
	}

findDistnctValues([1, 3, 2, 3]);
?>

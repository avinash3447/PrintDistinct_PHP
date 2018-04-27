<?php
function isDistint(array $arr)
	{
	$len = count($arr);
	$result = [];
  // need another array to track the occurrence of the element
	$isExist = [];
	for ($i = 0; $i < $len; $i++)
		{
		if (!in_array($arr[$i], $isExist))
			{
			$isExist[] = $arr[$i];
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

isDistint([1, 3, 2, 3]);
?>

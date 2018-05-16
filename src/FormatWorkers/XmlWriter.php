<?php

namespace FileConverter\FormatWorkers;
use Spatie\ArrayToXml\ArrayToXml;
 
 class XmlWriter{
 	public function WriteContents(array $ArrayContent ,string $pathSave) // ?? type : array
	{
		$file = new \SplFileObject($pathSave, 'w');

			$newArray = array();
		foreach($ArrayContent as $key => $value) {
			$newArray[' '.$key] = $value;
		}


	$result = ArrayToXml::convert($newArray);
			$file->fwrite($result);
	}
 }

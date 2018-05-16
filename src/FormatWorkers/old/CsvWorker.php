<?php

namespace FileConverter\FormatWorkers;

class CsvWorker 
{
	public function getContents(\SplFileObject $file) // ?? type : array
	{
		// 		$delimiter = ';';
		// $enclosure = "\n";
		//$file->setCsvControl($delimiter, $enclosure);

		while (!$file->eof()) {
			$Contents[] = $file->fgetcsv();
		}

		$newArray = array();
		foreach($Contents as $key => $value) {
			$newArray['('.$key.')'] = $value;
		}

		return $newArray;
	}

	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$i = 0;
		$file = new \SplFileObject($pathSave, 'w');


		// foreach ($ArrayContent as $fields) {
		// 	$KeysArray = array_keys($ArrayContent[$i++]);
		// 	foreach ($KeysArray as $Key) {

		// 		$file->fwrite($Keys.',');
		// 	}
		// }
		 // $file->fwrite('/n');

		foreach ($ArrayContent as $fields) {
			 $file->fputcsv($fields);
		}

	}
}

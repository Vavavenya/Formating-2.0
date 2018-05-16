<?php

namespace FileConverter\FormatWorkers;

class CsvReader
{
	public function getContents(\SplFileObject $file) // ?? type : array
	{
		// 		$delimiter = ';';
		// $enclosure = "\n";
		//$file->setCsvControl($delimiter, $enclosure);

		while (!$file->eof()) {
			$Contents[] = $file->fgetcsv();
		}

		// $newArray = array();
		// foreach($Contents as $key => $value) {
			// $newArray['('.$key.')'] = $value;
		// }

		return $Contents;
	}
}
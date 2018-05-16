<?php

namespace FileConverter\FormatWorkers;

class CsvWriter
{
	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new \SplFileObject($pathSave, 'w');

		foreach ($ArrayContent as $fields) {
			 $file->fputcsv($fields);
		}

	}
}
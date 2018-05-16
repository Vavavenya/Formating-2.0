<?php

namespace FileConverter\FormatWorkers;

class JsonWorker 
{
	public function getContents(\SplFileObject $file) // ?? type : array
	{
		while (!$file->eof()) {
			$Contents[] = json_decode($file->fread(1024),true);
		}
		return $Contents;
	}

	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new \SplFileObject($pathSave, 'w');
		$file->fwrite(json_encode($ArrayContent));
	}
}

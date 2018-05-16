<?php

namespace FileConverter\FormatWorkers;
use Spatie\ArrayToXml\ArrayToXml;

class XmlReader  
{
	public function getContents(\SplFileObject $file)
	{
		echo 'XML READER';
		while (!$file->eof()) {
			$Contents = $file->fread(1024);
		}
		var_dump($Contents);
		$ob= simplexml_load_string($Contents);
		$ob = (array)$ob;
		if (count($ob) == 1)
		{
			$ob = (array)array_shift($ob);
		}
		var_dump($ob);
		return $ob;
	}
}
<?php

declare(strict_types=1);

namespace FileConverter;

class Application
{
	public function run(string $filename, string $outputFormat, string $outputFilePath)
	{
		$file = new \SplFileObject($filename, 'r');
		$InfoFile = new \SplFileInfo($filename);			//Что за слэш?*
		$CurrentFormat = $InfoFile->getExtension();		

		$converter = new Converter($CurrentFormat,$outputFormat);

		$converter->convert($file, $outputFormat, $outputFilePath);
	}
}

<?php

namespace FileConverter\FormatWorkers;
use Spatie\ArrayToXml\ArrayToXml;

class XmlWorker 
{
	public function getContents(\SplFileObject $file) // ?? type : array
	{
		// while (!$file->eof()) {
		// 	$Contents[] = json_decode($file->fread(1024),true);
		// }
		// return $Contents;
		$array = [
    'Good guy' => [
        'name' => 'Luke Skywalker',
        'weapon' => 'Lightsaber'
    ],
    'Bad guy' => [
        'name' => 'Sauron',
        'weapon' => 'Evil Eye'
    ]
];

		var_dump($result = ArrayToXml::convert($array));
	}

	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new \SplFileObject($pathSave, 'w');
		$file->fwrite($result = ArrayToXml::convert($ArrayContent));


	}
}

<?php

namespace FileConverter\FormatWorkers;

class JsonWriter
{
	public function writeContents(array $ArrayContent ,string $pathSave)
	{
		$file = new \SplFileObject($pathSave, 'w');
		// foreach ($ArrayContent as $value) 
		// {
		if (count($ArrayContent)>1)
		{
		// for ($i=0; $i<count($ArrayContent);$i++) { 
			$file->fwrite(json_encode($ArrayContent));
		// }
		} 	else {
					$file->fwrite(json_encode($ArrayContent[0]));
		}
		// }

	}
}
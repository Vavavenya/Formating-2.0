<?php

namespace FileConverter\FormatWorkers;

class JsonReader
{
		public function getContents(\SplFileObject $file) // ?? type : array
		{
			while (!$file->eof()) {
				$Contents[] = json_decode($file->fread(1024),true);
			}
			return $Contents;
		}
	}
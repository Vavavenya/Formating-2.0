<?php

declare(strict_types=1);

namespace FileConverter;

use Workerks;


class Converter
{
	private $FormatReader;
	private $FormatWriter;
    public function __construct(string $CurrentFormat='kek',string $NeededFormat='kek')
    {
    	if ($CurrentFormat=='csv'){
        $this->FormatReader = new FormatWorkers\CsvReader();
    	} else if ($CurrentFormat=='json') {
        $this->FormatReader = new FormatWorkers\JsonReader();
    	} else if ($CurrentFormat=='xml'){
        $this->FormatReader = new FormatWorkers\XmlReader();
    	}

        if ($NeededFormat=='csv'){
        $this->FormatWriter = new FormatWorkers\CsvWriter();
        } else if ($NeededFormat=='json') {
        $this->FormatWriter = new FormatWorkers\JsonWriter();
        } else if ($NeededFormat=='xml'){
        $this->FormatWriter = new FormatWorkers\XmlWriter();
        }
    }

    public function convert(\SplFileObject $file, string $outputFormat, string $outputFilePath)
    {
        // var_dump($this->FormatReader);
       $ContentFile = $this->FormatReader->getContents($file);
       $this->FormatWriter->writeContents($ContentFile,$outputFilePath);

    }
}
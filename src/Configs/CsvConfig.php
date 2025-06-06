<?php

namespace Phpcsv\CsvHelper\Configs;

use Phpcsv\CsvHelper\Contracts\CsvConfigInterface;

class CsvConfig extends AbstractCsvConfig
{
    public function getDelimiter(): string
    {
        return $this->delimiter;
    }

    public function setDelimiter(string $delimiter): CsvConfigInterface
    {
        $this->delimiter = $delimiter;

        return $this;
    }

    public function getEnclosure(): string
    {
        return $this->enclosure;
    }

    public function setEnclosure(string $enclosure): CsvConfigInterface
    {
        $this->enclosure = $enclosure;

        return $this;
    }

    public function getEscape(): string
    {
        return $this->escape;
    }

    public function setEscape(string $escape): CsvConfigInterface
    {
        $this->escape = $escape;

        return $this;
    }

    public function getPath(): string
    {
        return $this->path;

    }

    public function setPath(string $path): CsvConfigInterface
    {
        $this->path = $path;

        return $this;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): CsvConfigInterface
    {
        $this->offset = $offset;

        return $this;
    }

    public function hasHeader(): bool
    {
        return $this->hasHeader;
    }

    public function setHasHeader(bool $hasHeader): CsvConfigInterface
    {
        $this->hasHeader = $hasHeader;

        return $this;
    }
}

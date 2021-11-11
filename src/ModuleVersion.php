<?php

namespace Msav\BitrixBumpModuleVersion;

use DateTime;

class ModuleVersion
{
    /** @var int Год версии */
    protected $versionYear;

    /** @var int Месяц версии */
    protected $versionMonth;

    /** @var int День версии */
    protected $versionDay;

    /** @var int Счётчик версии */
    protected $versionCounter;

    /** @var DateTime Полная дата версии */
    protected $date;

    /** @var string Имя файла версии */
    protected $fileName;

    /**
     * @param    string    $fileName
     */
    public function __construct(string $fileName)
    {
        $this->setFileName($fileName);
    } // __construct

    /**
     * Обновляет версию файла модуля.
     *
     * @return bool
     */
    public function bumpVersion(): bool
    {
        return false;
    } // bumpVersion

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param    DateTime    $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param    string    $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return int
     */
    public function getVersionYear(): int
    {
        return $this->versionYear;
    }

    /**
     * @return int
     */
    public function getVersionMonth(): int
    {
        return $this->versionMonth;
    }

    /**
     * @return int
     */
    public function getVersionDay(): int
    {
        return $this->versionDay;
    }

    /**
     * @return int
     */
    public function getVersionCounter(): int
    {
        return $this->versionCounter;
    }


}

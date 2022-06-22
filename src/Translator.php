<?php

declare(strict_types=1);

namespace Translator;

use Buki\Pdox;

class Translator
{
    private DB $db;

    public static string $table = 'translator';

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function getByABB(?string $abb)
    {
        if(!$abb) return false;

        $select = 'SELECT * FROM translator WHERE `abb` = ?';
        $collection = $this->getConnection()
            ->query($select, [$abb])
            ->fetch();

        if (!$collection) return false;

        return $collection;
    }


    public function getConnection(): Pdox
    {
        return $this->db->getPdox();
    }
}

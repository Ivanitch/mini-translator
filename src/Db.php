<?php

namespace Translator;

use Buki\Pdox;

class Db
{
    private Pdox $pdox;

    public function __construct(Pdox $pdox)
    {
        $this->pdox = $pdox;
    }

    /**
     * @return Pdox
     */
    public function getPdox(): Pdox
    {
        return $this->pdox;
    }
}

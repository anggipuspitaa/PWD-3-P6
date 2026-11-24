<?php
// Class induk
class Hewan
{
    private $nama;
    private $umur;

    public function __construct($nama, $umur)
    {
        $this->setNama($nama);
        $this->setUmur($umur);
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getUmur()
    {
        return $this->umur;
    }
}

// Class turunan: Kucing
class Kucing extends Hewan
{
    public function getJenis()
    {
        return "Kucing";
    }

    public function getSuara()
    {
        return "Meong!";
    }
}

// Class turunan: Anjing
class Anjing extends Hewan
{
    public function getJenis()
    {
        return "Anjing";
    }

    public function getSuara()
    {
        return "Guk guk!";
    }
}

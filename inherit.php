<?php

class lingkaran
{
    //atribut
    public $r;

    //method
    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getLuas(){
        return $this->r * $this->r * 3.14;
    }
    public function getKeliling(){
        return $this->r * 2 * 3.14;
    }
}

class tabung extends lingkaran
{
    public $tinggi;
    //keyword parent digunakan utk mengakses atribut atau method dari superclass
    public function __construct($r, $t)
    {
        parent ::__construct($r);
        $this->tinggi =$t;
    }

    public function getLuas()
    {
        //2*phi*r * (r+t)
        return 2 * 3.14 * $this->r * ($this->r + $this->tinggi);
    }

    public function getVolume()
    {
        return parent::getLuas() * $this->tinggi;
    }

}
$gelas = new Tabung(10, 25);
echo nl2br("Luas Gelas: ".$gelas->getLuas(). "\n");
echo nl2br("Volume Gelas: ".$gelas->getVolume(). "\n");

class kerucut extends lingkaran
{
    public $tinggi;
    public $pelukis;
    public function __construct($r, $t)
    {
        parent ::__construct($r);
        $this->tinggi =$t;
    }

    public function getPelukis()
    {
        //phytagoras *r *t
        // akar (r2 + t2)
        return sqrt($this->r * $this->r + $this->tinggi * $this->tinggi);

    }

    public function getLuas()
    {
        //2*phi*r * (r+t)
        return 3.14 * $this->r * ($this->r + $this->getPelukis());
    }

    public function getVolume()
    {
        return 1/3 * parent::getLuas() * $this->tinggi;
    }   
}
$topi = new Kerucut(10, 25, 15);
echo nl2br("\n");
echo nl2br("Luas Topi: ".$topi->getLuas(). "\n");
echo nl2br("Volume Topi: ".$topi->getVolume(). "\n");

class bola extends lingkaran
{
    public function __construct($r)
    {
        parent ::__construct($r);
    }

    public function getLuas()
    {
        //2*phi*r * (r+t)
        return 4 * parent::getLuas();
    }

    public function getVolume()
    {
        return 4/3 * 3.14 * $this->r * $this->r * $this->r ;
    }   
}
$bola = new Bola(10);
echo nl2br ("\n");
echo nl2br("Luas Bola: ".$bola->getLuas(). "\n");
echo nl2br("Volume Bola: ".$bola->getVolume());
?>
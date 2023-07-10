<!-- 
    -	Buatlah kelas induk yang dapat menghitung total, rata-rata, nilai tertinggi, dan terendah
    -dn mendapatakan nilai array acak  
 -->

<?php

class Menghitung
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function GetTotal()
    {
        $total = 0;
        foreach ($this->data as $nilai) {
            $total += $nilai;
        }
        return $total;
    }
    public function getRata()
    {
        $total = $this->GetTotal();
        $rataRata = $total / count($this->data);
        return $rataRata;
    }
    public function getMax()
    {
        $tinggi = $this->data[0];
        foreach ($this->data as $nilai) {
            if ($nilai > $tinggi)
                $tinggi = $nilai;
        }
        return $tinggi;
    }
    public function getMin()
    {
        $rendah = $this->data[0];
        foreach ($this->data as $nilai) {
            if ($nilai < $rendah)
                $rendah = $nilai;
        }
        return $rendah;
    }
}


$nilaiku = [90, 80, 70, 55];
$objek = new Menghitung($nilaiku);
echo "total nilai adalah: " . $objek->GetTotal() . "<br/>";
echo "rata-ratanya adalah: " . $objek->getRata() . "<br/>";
echo "nilai tertingginya adalah: " . $objek->getMax() . "<br/>";
echo "nilai terendahnya adalah: " . $objek->getMin() . "<br/>";

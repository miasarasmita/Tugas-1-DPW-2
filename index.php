 <?php


class animal {
    public $jumlah_kaki, $bisa_terbang;
}

class serigala extends animal 
{
    function bersuara ()
    {
        return "aauuuuuug";
    }
}

class kucing extends animal 
{
    function bersuara ()
    {
        return "miiiaaaaauuuuu";
    }
}

class monyet extends animal 
{
    function bersuara ()
    {
        return "uuu aaa";
    }
}

class ayam extends animal 
{
    function bersuara ()
    {
        return "petok petok";
    }
}

// serigala
$Dandi = new Serigala;
$Dandi->jumlah_kaki = 4;
$Dandi->bisa_terbang = "Tidak Bisa Terbang";

echo "Dandi Adalah serigala <br>";
echo "Punya Kaki Sebanyak: " . $Dandi->jumlah_kaki . "<br>";
echo $Dandi->bisa_terbang . "<br>";
echo "Suaranya: " . $Dandi->bersuara() . "<br>";


echo "<hr>";

// kucing
$Redi = new kucing;
$Redi->jumlah_kaki = 4;
$Redi->bisa_terbang = "Tidak Bisa Terbang";


echo "Redi Adalah kucing <br>";
echo "Punya Kaki Sebanyak: " . $Redi->jumlah_kaki . "<br>";
echo $Redi->bisa_terbang . "<br>";
echo "Suaranya: " . $Redi->bersuara() . "<br>";

echo "<hr>";

// monyet
$Adudu = new monyet;
$Adudu->jumlah_kaki = 2;
$Adudu->bisa_terbang = "Tidak Bisa Terbang";

echo "Adudu Adalah monyet <br>";
echo "Punya Kaki Sebanyak: " . $Adudu->jumlah_kaki . "<br>";
echo $Adudu->bisa_terbang . "<br>";
echo "Suaranya: " . $Adudu->bersuara() . "<br>";

echo "<hr>";

// ayam
$bacok = new Ayam;
$bacok->jumlah_kaki = 2;
$bacok->bisa_terbang = "Bisa Terbang";

echo "bacok Adalah ayam <br>";
echo "Punya Kaki Sebanyak: " . $bacok->jumlah_kaki . "<br>";
echo $bacok->bisa_terbang . "<br>";
echo "Suaranya: " . $bacok->bersuara() . "<br>";

echo "<hr>";

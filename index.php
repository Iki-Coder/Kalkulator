<!DOCTYPE html>
<html>
    
<body>
        <?php
        function tambah($x, $y){
            $hasil = $x + $y;
            return $hasil; 
        }
        function kurang($x, $y){
            $hasil = $x - $y;
            return $hasil;
        }
        function bagi($x, $y){
            $hasil = $x / $y;
            return $hasil;
        }
        function kali($x, $y){
            $hasil = $x * $y;
            return $hasil;
        }

        if(isset($_GET["nil1"]) && isset($_GET["nil2"])) {
            $Nil1 = $_GET["nil1"];
            $Nil2 = $_GET["nil2"];

            $tam = tambah($Nil1, $Nil2);
            $kur = kurang($Nil1, $Nil2);
            $bag = bagi($Nil1, $Nil2);
            $kal = kali($Nil1, $Nil2);

            echo '<div class="result">';
            echo "<p>Penjumlahan: $tam</p>";
            echo "<p>Pengurangan: $kur</p>";
            echo "<p>Pembagian: $bag</p>";
            echo "<p>Perkalian: $kal</p>";
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
<?php

function kullanilabilirlik($pus, $pd) {
    $klb=($pus-$pd)/$pus;
    return $klb;
}

function performans($scz,$um,$pus,$pd) {
    $perf=(($scz*$um)/($pus-$pd));
    return $perf;
}

function kalite($sum, $tum) {
    $kal=$sum/$tum;
    return $kal;
}

function oee($klb, $perf, $kal) {
    $oee=($klb*$perf*$kal)*100;
    return $oee;
}


$baglanti=mysqli_connect("127.0.0.1","root","","sunucu2020");

if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["pus"])))){
            $pus=$_POST["pus"];
        }
        if(strip_tags(trim(isset($_POST["pd"])))){
            $pd=$_POST["pd"];
        }
        if(strip_tags(trim(isset($_POST["scz"])))){
            $scz=$_POST["scz"];
        }
        if(strip_tags(trim(isset($_POST["um"])))){
            $um=$_POST["um"];
        }
        if(strip_tags(trim(isset($_POST["sum"])))){
            $sum=$_POST["sum"];
        }
        if(strip_tags(trim(isset($_POST["tum"])))){
            $tum=$_POST["tum"];
        }    
        $klb=kullanilabilirlik($pus,$pd);
        $perf=performans($scz,$um,$pus,$pd);
        $kal=kalite($sum, $tum);
        $oee=oee($klb, $perf, $kal);
        $date_old = date('Y-m-d H:i:s', time());
        $date = date('Y-m-d H:i:s', strtotime($date_old));
        echo "Kullanılabilirlik Oranınız:",$klb, "<br>";   
        echo "Performansınız:",$perf, "<br>";
        echo "Kalite:",$kal, "<br>";
        echo "Ekipman Etkililik Oranınız:",$oee, "<br>";
        echo "Tarih:",$date,"<br>";
        $sorgu=mysqli_query($baglanti,"INSERT INTO veriler (kullanilabilirlik,performans,kalite,oee,tarih) VALUES ('".$klb."','".$perf."','".$kal."','".$oee."','".$date."')");
        if ($sorgu==true) {
            echo "Kayıt veritabanına eklendi.";
        } else {
            echo "Hata:".$sorgu.$baglanti->error;
        }
    } else {
        echo "Veriler gelmedi";
    }
}



else { 
    die("bağlantı sağlanamadı");
}

?>
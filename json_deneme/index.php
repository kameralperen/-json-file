<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php

        $Dosya      = file_get_contents("json_gelismis.json");
        $Donustur   = json_decode($Dosya, true); //true değeri gelen verilerde nesne vs varsa her şeyi dizi olmaya zorlar.

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";

        function Oku($Veriler){
            foreach($Veriler as $Anahtar => $Eleman){
                if(!is_array($Eleman)){
                    echo $Anahtar . " : " . $Eleman . "<br/>";
                }else{
                    {
                        Oku($Eleman);
                    }
                }
            }
        }

        Oku($Donustur);

         /*   
        $Donustur   =   json_encode($Degerler);

        echo $Donustur . "<br/>";

        $GeriDondur =   json_decode($Donustur);

        echo "<pre>";
        print_r($GeriDondur); 
        echo "</pre>";

        Genelde veriler bize dosyalardan gelir ve bu şekilde json verilerini alırız. Dosyadan çalışmak için kullanılacak yapı ise aşağıdaki gibidir.
        $Dosya      = file_get_contents("json_gelismis.json");
        $DosyadanGelecekDegeriDonustur  =   json_decode($Dosya);
        */


    ?>
</body>
</html>
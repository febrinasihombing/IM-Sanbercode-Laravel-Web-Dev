<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
    echo "<h3> Soal No 1</h3>";

    $first_sentence = "Hello PHP!"; 
    $second_sentence = "I'm ready for the challenges"; 

    // Fungsi untuk menghitung panjang string dan jumlah kata
    function count_string_info($str) {
        $length = strlen($str);
        $word_count = str_word_count($str);
        return "Panjang string: $length, Jumlah kata: $word_count";
    }

    echo "<p>$first_sentence - " . count_string_info($first_sentence) . "</p>";
    echo "<p>$second_sentence - " . count_string_info($second_sentence) . "</p>";
?>


        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        
        echo "<h3> Soal No 2</h3>";
        <?php   
    echo "<h3> Soal No 2</h3>";

    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";

    $words = explode(" ", $string2); // Memecah string menjadi array berdasarkan spasi

    echo "Kata pertama: " . $words[0] . "<br>";
    echo "Kata kedua: " . $words[1] . "<br>";
    echo "Kata ketiga: " . (isset($words[2]) ? $words[2] : 'N/A') . "<br>"; // Memeriksa jika kata ketiga ada
?>

        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " ;
        echo "<br> Kata Ketiga: " ;

        echo "<h3> Soal No 3 </h3>";
        <?php   
    echo "<h3> Soal No 3 </h3>";

    $string3 = "PHP is old but sexy!";
    $new_string = str_replace("old but sexy", "old but awesome", $string3); 

    echo "String: \"$new_string\"";
?>

        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" "; 
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>
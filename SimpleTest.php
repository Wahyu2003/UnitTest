<?php
//path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php filename.php
//butuh framework PHPUnit
use PHPUnit\Framework\TestCase; //menggunakan uji cobo dalam testcase

//class yang mau di TEST
require_once "WordCount.php"; //mengimpor file yang ingin diuji coba

//Class untuk run Testing.
class SimpleTest extends TestCase {
    public function testCountWords() {
        //kita pakai class yang mau kita test
        $wc = new WordCount();

        //kita masukan parameter 4 kata yang harusnya dapat output 4
        $TestSentence = "My name is Joko"; // 4 kata
        $WordCount = $wc->countWords($TestSentence);

        //Kita assert equal, ekspetasinya harus 4, jika benar berarti wordcount berfungsi dengan baik.
        $this->assertEquals(4, $WordCount); //assert equal digunakan untuk membandingan 2 nilai
    }
}
?>
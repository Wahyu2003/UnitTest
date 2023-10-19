<?php
//file : WordCount.php (koment : tidak akan dieksekusi)
class Wordcount {
    public function countWords($sentence) { //membuat fungsi countWords dengan parameter $sentence
        return count(explode(" ",$sentence)); //explode digunakan untuk memecahkan menjadi beberapa bagian dengan " " sebagai pemeisah
    }
}
?>
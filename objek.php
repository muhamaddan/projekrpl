<!-- Pengertian Class dalam Pemrograman Berbasis Objek
Class adalah ‘cetak biru’ atau ‘blueprint’ dari object. Class digunakan hanya untuk membuat kerangka dasar. Yang akan kita pakai nantinya adalah hasil cetakan dari class, yakni object.

Sebagai analogi, class bisa diibaratkan dengan laptop atau notebook. Kita tahu bahwa laptop memiliki ciri-ciri seperti merk, memiliki keyboard, memiliki processor, dan beberapa ciri khas lain yang menyatakan sebuah benda tersebut adalah laptop. Selain memiliki ciri-ciri, sebuah laptop juga bisa dikenakan tindakan, seperti: menghidupkan laptop atau mematikan laptop. --> 

<!-- Object atau Objek adalah hasil cetak dari class, atau hasil ‘konkrit’ dari class. Jika menggunakan analogi class laptop, maka objek dari class laptop bisa berupa: laptop_andi, laptop_anto, laptop_duniailkom, dan lain-lain. Objek dari class laptop akan memiliki seluruh ciri-ciri laptop, yaitu property dan method-nya.

Proses ‘mencetak’ objek dari class ini disebut dengan ‘instansiasi’ (atau instantiation dalam bahasa inggris). Pada PHP, proses instansiasi dilakukan dengan menggunakan keyword ‘new’. Hasil cetakan class akan disimpan dalam variabel untuk selanjutnya digunakan dalam proses program.
 -->

<?php
// ini CLASS laptop
class laptop {
  
   // buat property untuk class laptop
   var $pemilik;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
}
  
// ini adalah OBJEK yang dibuat dari class laptop (instansiasi)
$laptop_anto = new laptop();
$laptop_andi = new laptop();
$laptop_dina = new laptop();
  
// set property
$laptop_anto->pemilik="Anto";
$laptop_andi->pemilik="Andi";
$laptop_dina->pemilik="Dina";
  
// tampilkan property
echo $laptop_anto->pemilik; // Anto
echo "<br />";
echo $laptop_andi->pemilik; // Andi
echo "<br />";
echo $laptop_dina->pemilik; // Dina
echo "<br />";
?>
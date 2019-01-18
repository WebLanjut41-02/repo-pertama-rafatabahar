<form action="" method="post">
  Tinggi Badan <input type="text" name="tinggi_badan"><br>
  Berat Badan <input type="text" name="berat_badan" ><br>
  Laki-Laki <input type="radio" name="jk" value="Laki-Laki"><br>
  Perempuan <input type="radio" name="jk" value="Perempuan"><br>
  <input type="submit" name="submit">
</form>

<?php
    if (isset($_POST['submit'])) {
      $object = new hitungBmi();
      $object->hitung();
      $object->hasil();
    }

   class hitungBmi{
     private $tinggi, $berat, $jk, $bmi, $kategori;

     function __construct(){
       $this->tinggi = $_POST['tinggi_badan']/100;
       $this->berat = $_POST['berat_badan'];
       $this->jk = $_POST['jk'];
     }

     public function hitung(){
       $this->bmi = $this->berat / ($this->tinggi * $this->tinggi);

       if ($this->jk = "Perempuan") {
         switch ($this->bmi) {
             case $this->bmi<18:
               $this->kategori = "Under Weight / kurus";
               break;
            case $this->bmi > 18 && $this->bmi < 25:
               $this->kategori = "Normal Weight / normal";
               break;
           case $this->bmi > 25 && $this->bmi <27:
             $this->kategori = "Over Weight / Kegemukan";
             break;
           case $this->bmi > 27:
             $this->kategori = "Obesitas";
             break;
         }
       }else {
         switch ($this->bmi) {
             case $this->bmi<17:
               $this->kategori = "Under Weight / kurus";
               break;
            case $this->bmi > 17 && $this->bmi < 23:
               $this->kategori = "Normal Weight / normal";
               break;
           case $this->bmi > 23 && $this->bmi <27:
             $this->kategori = "Over Weight / Kegemukan";
             break;
           case $this->bmi > 27:
             $this->kategori = "Obesitas";
             break;
         }
       }
     }

     public function hasil(){
       echo "Anda termasuk = ".$this->kategori;
     }
   }
?>

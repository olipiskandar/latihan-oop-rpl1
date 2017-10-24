<?php
  class robot{
    public $suara;
    public $berat;

    public function __construct($suara, $berat)
    {
      $this->suara = $suara;
      $this->berat = $berat;
    }

    // public function set_suara($bunyi)
    // {
    //   return $this->suara = $bunyi;
    // }

    public function get_suara()
    {
      return $this->suara;
    }

    public function hitungberat($berat = 100)
    {
      return $this->berat + $berat;
    }
  }
?>

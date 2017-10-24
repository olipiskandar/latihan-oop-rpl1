<?php
  class kucing{
    public $mata;
    public $suara;

    // public function __construct($mata, $suara)
    // {
    //   $this->mata = $mata;
    //   $this->suara = $suara;
    // }

    public function set_suara($suara)
    {
      $this->suara = $suara;
    }

    public function get_suara()
    {
      return $this->suara;
    }
  }
?>

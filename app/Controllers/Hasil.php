<?php

namespace App\Controllers;

class Hasil extends BaseController
{
    public function index()
    {
        return view('hasil_hitung.php');
    }
    public function form_perhitungan_matrix(){
        $berat = (float)$this->request->getVar('berat');
        $panjang = (float)$this->request->getVar('panjang');
        $lebar = (float)$this->request->getVar('lebar');
        $tinggi = (float)$this->request->getVar('tinggi');
        $matrix = $this->formula_matrix($panjang, $lebar, $tinggi);
        $chargeable_weight = $this->chargeableWeightValue($berat, $matrix);
        $data['values'] = $chargeable_weight;
        return view('hasil_hitung.php', $data);
    }
    public function formula_matrix($panjang, $lebar, $tinggi){
        $hasil = ($panjang*$lebar*$tinggi)/4000;
        return $hasil;
    }
    public function chargeableWeightValue($berat, $matrix){
        if ($matrix >= $berat){
            return [$matrix, True];
        }else{
            return [$berat, False];
        }
    }
}

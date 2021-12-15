<?php

class About {
    public function index($nama = 'Suhendani', $pekerjaan = 'Mahasiswa'){
        echo "Hallo Nama saya $nama, Saya adalah $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}
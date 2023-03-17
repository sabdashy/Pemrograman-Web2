<?php
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $kategoris = $_POST['skill'];
    $domisili = $_POST['domisili'];

    function skor_skill($skills)
    {
        $skill_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;

        foreach ($skills as $skill) {
            $result = $result + $skill_list[$skill];
        }

        return $result;
    }

    // Tugas Kalian!
    function kategori_skill($kategoris)
    {
        // return string kategori skill
        $skill_lists = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $hasil = 0;

        foreach ($kategoris as $kategori) {
            $hasil = $hasil + $skill_lists[$kategori];
        }

        if ($hasil > 99 && $hasil < 151) {
            $cetak = 'Kategori Skill : Sangat Baik';
        } elseif ($hasil > 59 && $hasil < 101) {
            $cetak = 'Kategori Skill : Baik';
        } elseif ($hasil > 40 && $hasil < 61) {
            $cetak = 'Kategori Skill : Cukup';
        } elseif ($hasil > 0 && $hasil < 41) {
            $cetak = 'Kategori Skill : Kurang';
        } elseif ($hasil == 0) {
            $cetak = 'Kategori Skill : Tidak Memadai';
        } else {
            $cetak = 'Kategori Skill : I';
        }
        return $cetak;
    }

    echo 'NIM: ' . $nim;
    echo '<br> Nama: ' . $nama;
    echo '<br> Jenis Kelamin: ' . $gender;
    echo '<br> Program Studi: ' . $prodi;
    echo '<br> Skill Progaming: ';
    foreach ($skills as $skill) {
        echo $skill . ' ';
    }
    echo '<br> Tempat Domisili: ' . $domisili;
    echo '<br> Skor Skill: ' . skor_skill($skills);
    echo '<br>' . kategori_skill($kategoris);
}

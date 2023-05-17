
<?php
	include 'header.php';
?>
<div class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
		<h2>Data Nilai</h2>
		<table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Pemrograman Web</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>3</td>
              <td>Faqih</td>
              <td>Dasar-dasar Pemrograman</td>
              <td>35</td>
              <td>54</td>
              <td>78</td>
              <td>65.82</td>
              <td>C</td>
              <td>Cukup</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    require_once 'libfungsi.php';
                    if (isset($_POST['submit'])){
                        $nomor = $_POST['nomor'];
                        $namaLengkap = $_POST ['namaLengkap'];
                        $mataKuliah = $_POST['mataKuliah'];
                        $nilaiUts = $_POST ['nilaiUts'];
                        $nilaiUas = $_POST ['nilaiUas'];
                        $nilaiTugas = $_POST ['nilaiTugas'];
                        $rerata = kelulusan($rerata);
                        $totalNilai = ($nilaiUts * 0.3) + ($nilaiUas * 0.35) + ($nilaiTugas * 0.35);
                        $grade = grade($rerata);
                        $predikat = predikat($rerata);
                        $keterangan = kelulusan($rerata);
                        

                      
                 

                    echo '<tr><td>' . $nomor;
                    echo '<td> ' . $namaLengkap;
                    echo '<td> ' . $mataKuliah;
                    echo '<td> ' . $nilaiUts ;
                    echo '<td> ' . $nilaiUas;
                    echo '<td> ' . $nilaiTugas;
                    echo '<td> ' . $totalNilai;
                    echo '<td> ' . $grade;
                    echo '<td> ' . $predikat;
                    echo '<td> ' . $keterangan;
                    echo '</td></tr>';
                 }
                ?>
                    
                </div>
      </tbody>
  </table>
</div>

<?php
	include 'footer.php';
?>
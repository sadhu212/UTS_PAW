<?php

require('plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'Invoice',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'noo',1,0,'C');
$pdf->Cell(20,6,'nama pengirim',1,0,'C');
$pdf->Cell(50,6,'lokasi pengirim',1,0,'C');
$pdf->Cell(30,6,'nama penerima',1,0,'C');
$pdf->Cell(30,6,'lokasi penerima',1,0,'C');
$pdf->Cell(30,6,'tanggal',1,0,'C');
$pdf->Cell(20,6,'harga',1,1,'C');

$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
$host="localhost";
$user="root";
$password="";
$db="database";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;
$no='';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($kon, "select * from database");
    $pdf->Cell(8,6,$no,1,0);
    $pdf->Cell(20,6,$data['nama pengirim'],1,0);
    $pdf->Cell(50,6,$data['lokasi pengirim'],1,0);
    $pdf->Cell(30,6,$data['nama pengirim'],1,0);
    $pdf->Cell(30,6,$data['lokasi penerima'],1,0);
    $pdf->Cell(30,6,$data['tanggal'],1,0);
    $pdf->Cell(20,6,$data['harga'],1,1);
    $no++;
}

$pdf->Output();
?>
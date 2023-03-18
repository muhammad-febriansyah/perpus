<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();


$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image("image/$q->logo", 30, 5, 27, 25);
$pdf->Cell(25);
$pdf->SetFont('Times','B',20);
$pdf->Cell(0,5,$q->web,0,1,'C');
$pdf->Cell(25);
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,5,'E-Mail : '.$q->email,0,1,'C');
$pdf->Cell(25);
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,5,' No.HP : '.$q->telp,0,1,'C');

//head
$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);
$pdf->Cell(30, 17, '', 0, 1);
$pdf->SetFont('Times', 'B', 11);
$sqldetil = $this->db->query("select peminjaman.*,siswa.nis,siswa.kelas from peminjaman inner join siswa on siswa.nama = peminjaman.siswa where peminjaman.tglkembali='$kembali' and peminjaman.status='Kembali'");
//body

$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(0, 5, 'Laporan Data Pengembalian Buku', 0, 1, 'C');
$pdf->Cell(30, 8, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(30, 6, 'NIS SISWA', 1, 0, 'C');
$pdf->Cell(30, 6, 'NAMA SISWA', 1, 0, 'C');
$pdf->Cell(30, 6, 'JUDUL BUKU', 1, 0, 'C');
$pdf->Cell(30, 6, 'KONDISI BUKU', 1, 0, 'C');
$pdf->Cell(25, 6, 'DENDA', 1, 0, 'C');
$pdf->Cell(32, 6, 'TANGGAL PINJAM', 1, 1, 'C');
$i = 1;
foreach ($sqldetil->result() as $d) {
    $pdf->SetFont('Times', '', 9);
    $pdf->Cell(10, 6, $i++, 1, 0);
    $pdf->Cell(30, 6, $d->nis, 1, 0);
    $pdf->Cell(30, 6, $d->siswa, 1, 0);
    $pdf->Cell(30, 6, $d->buku, 1, 0);
    $pdf->Cell(30, 6, $d->kondisikembali, 1, 0);
    $pdf->Cell(25, 6, $d->denda, 1, 0);
    $pdf->Cell(32, 6, format_indo(date("Y-m-d"),$d->tglkembali), 1, 1);
}

$pdf->SetFont('Times', '', 10);

$pdf->Output('datapengembalianbuku.pdf', 'I');

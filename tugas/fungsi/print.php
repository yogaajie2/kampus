<?php
include 'koneksi.php';

$sql = "SELECT * FROM motogp WHERE id = $_GET[id]";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
echo "ERROR";
}

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

// Include the main TCPDF library (search for installation path).
require_once('../tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Yoga Ajie');
$pdf->SetTitle($row['nama'].' | Biodata Pembalap');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// add a page
$pdf->AddPage();

$html = '<div style="text-align: center;">
<img style="width: 120px; height: 95px;" src="../'.$row['foto'].'">
<h1>'.$row['nama'].'</h1><br>
<img style="width: 340px; height: 260px;" src="../'.$row['foto_motor'].'">
<p style="font-weight: bold; text-transform:uppercase;">'.$row['negara'].'</p>
<h1 style="font-weight: bold;">'.$row['nomor'].'</h1>
<p style="font-weight: bold;">'.$row['nama'].'</p>
<p style="font-weight: bold">'.$row['tim'].'</p>
<p>'.$row['motor'].'</p>
<p>'.$row['tempat_lahir'].'</p>
<p>'.$row['tanggal_lahir'].'</p>
<p>Berat badan: '.$row['berat_badan'].' kg</p>
<p>Tinggi: '.$row['tinggi_badan'].' cm</p>
<br>
<p style="font-weight: bold;">Kemenangan Seri: '.$row['kemenangan_seri'].'</p>
<p style="font-weight: bold;">Kemenangan Kejuaraan: '.$row['kemenangan_kejuaraan'].'</p>
</div>';
 
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();
//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

}

?>
<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../../assets/img/kng.jpg',20,10);

        // Arial bold 15
        $this->SetFont('Times','B',15);
        // Move to the right
        // $this->Cell(60);
        // Title
        $this->Cell(200,8,'PEMERINTAH KABUPATEN KUNINGAN',0,1,'C');
        $this->Cell(200,8,'KECAMATAN CIAWIGEBANG',0,1,'C');
        $this->Cell(200,8,'DESA DUKUHDALEM',0,1,'C');
        $this->SetFont('Times','',13);
        $this->Cell(200,8,'Jl.Desa Dukuh Dalem No.1 Ciawigebang kuningan',0,1,'C');
        // Line break

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(190,0,'',1,1,'C');
        }

        $this->Ln(10);
    }

    //Page footer
    function Footer()
    {
        //atur posisi 1.5 cm dari bawah
        $this->SetY(-15);
        //Arial italic 9
        $this->SetFont('Arial','I',9);
        //nomor halaman
    
    }
}

// ambil dari url
$id_kematian = $_GET['id_kematian'];
// ambil dari database
include "data-show.php";
            

            $nomor_surat ="01/SKet/I/2018";
            $provinsi = "Jawa Barat";
            $kabupaten = "Kunigan";
            $kecamatan = "Ciawigebang";
            $desa = "Dukuhdalem";
            
            $jabatan="Kepala Desa";
            $nama_pamong="SUEB";


        function TanggalIndo($date){
        $BulanIndo = array("Januari","","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");

        $tahun = substr($date,0,4);
        $bulan = substr($date,5,2);
        $tgl = substr($date, 8,2);

        $result = $tgl." ". $BulanIndo[(int)$bulan-1]." ".$tahun;
        return($result);
        }


$pdf = new PDF('P', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',12);


            //Jenis Surat
        $pdf->SetFont('Times','U',15);
        $pdf->Cell(0,0,'SURAT KETERANGAN KEMATIAN ',0,1,'C');
            
            //Nomor Surat
            $pdf->SetFont('Times','',13);
            $pdf->Cell(0,10,'Nomor: '.$nomor_surat,0,1,'C');
            
            //Isi Surat
            $jenis = '         Yang bertanda tangan dibawah ini Kepala Desa '.$desa.', Kecamatan '.$kecamatan.', Kabupaten '.$kabupaten.', Provinsi '.$provinsi.' menerangkan telah meninggal seorang warga dengan data sebagai berikut:';
            $pdf->SetFont('Times','',11);
            $pdf->Ln(3);
            $pdf->MultiCell(0,5,$jenis,'',"L");
            
            //Pindah Baris Isi Surat
            $pdf->Ln(6);
            $pdf->Cell(0,5,'Nama',0,0,'L');
            $pdf->Cell(-155);
            $pdf->Cell(0,5,':  '.strtoupper($data_kematian[0]['nama_warga']),0,1,'L');
            
            $pdf->Cell(0,5,'Jenis Kelamin',0,0,'L');     
            $pdf->Cell(-155);
            $pdf->Cell(0,5,':  '.strtoupper($data_kematian[0]['jenis_kelamin_warga']),0,1,'L');
            
            $pdf->Cell(0,5,'Sebab Kematian',0,0,'L');
            $pdf->Cell(-155);
            $pdf->Cell(0,5,':  '.strtoupper($data_kematian[0]['sebab']),0,1,'L');
            
            $pdf->Cell(0,5,'Tempat Kematian',0,0,'L');
            $pdf->Cell(-155);
            $pdf->Cell(0,5,':  '.strtoupper($data_kematian[0]['tempat_kematian']),0,1,'L');
            
            $pdf->Cell(0,5,'Nama Pelapor',0,0,'L');
            $pdf->Cell(-155);
            $pdf->Cell(0,5,':  '.strtoupper($data_kematian[0]['nama_pelapor']),0,1,'L');
            
            $pdf->Cell(0,5,'Hubungan Pelapor ',0,0,'L');
            $pdf->Cell(-155);
            $pdf->Cell(0,5,':  '.strtoupper($data_kematian[0]['hubungan_pelapor']),0,1,'L');

            //Akhir Surat
            $jenis = '         Demikian surat ini dibuat agar dapat digunakan sebagaimana mestinya. Atas perhatiannya kami ucapkan terima kasih.';
            $pdf->SetFont('Times','',11);
            $pdf->Ln(3);
            $pdf->MultiCell(0,5,$jenis,'',"L");
            
            $pdf->Ln(30);
            $pdf->Cell(134);
            $pdf->Cell(0,5,$kabupaten.', '.TanggalIndo($data_kematian[0]['tgl_meninggal']),0,0,'C');
            
            $pdf->Ln(8);
            $pdf->Cell(134);
            $pdf->Cell(0,5,$jabatan.' '.$desa,0,0,'C');
            
            $pdf->Ln(5);
            
            $pdf->SetFont('Times','BU',11);
            $pdf->Ln(30);
            $pdf->Cell(134);
            $pdf->Cell(0,5,$nama_pamong,0,0,'C');
            


    $pdf->Ln(10);

$pdf->Output();
?>

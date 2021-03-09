<?php

defined('BASEPATH') or exit('No direct script access allowed');

Class LaporanExcel extends CI_Controller{
    
  public function __construct(){    
    parent::__construct();        
    // $this->load->model('siswa_model');  
    $this->load->library('curl');

    $this->API = "http://localhost:8080/antrian/laporan";
  
  }
    public function index(){   
        $data['laporan'] = json_decode($this->curl->simple_get($this->API));
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php'); 
        require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php'); 
        $object= new PHPExcel();
        $object->getProperties()->setCreator("KEMENAG Malang");
        $object->getProperties()->setLastModifiedBy("KEMENAG Malang");
        $object->getProperties()->setTitle("Daftar Antrian");

        
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Tanggal');
        $object->getActiveSheet()->setCellValue('C1', 'Nomor');
        $object->getActiveSheet()->setCellValue('D1', 'Id Instansi');
        $object->getActiveSheet()->setCellValue('E1', 'Id Layanan');
        $object->getActiveSheet()->setCellValue('F1', 'Waktu Datang');
        $object->getActiveSheet()->setCellValue('G1', 'Waktu Panggil');
        $object->getActiveSheet()->setCellValue('H1', 'Waktu Selesai');
        $object->getActiveSheet()->setCellValue('I1', 'Status');

            $baris = 2;
            $no = 1;
            foreach($data['laporan'] as $rows)
            {
              $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
              $object->getActiveSheet()->setCellValue('B'.$baris, $rows->tanggal);
              $object->getActiveSheet()->setCellValue('C'.$baris, $rows->nomor);
              $object->getActiveSheet()->setCellValue('D'.$baris, $rows->id_instansi);
              $object->getActiveSheet()->setCellValue('E'.$baris, $rows->id_layanan);
              $object->getActiveSheet()->setCellValue('F'.$baris, $rows->waktu_datang);
              $object->getActiveSheet()->setCellValue('G'.$baris, $rows->waktu_panggil);
              $object->getActiveSheet()->setCellValue('H'.$baris, $rows->waktu_selesai);
              $object->getActiveSheet()->setCellValue('I'.$baris, $rows->status);
              $baris++;
                  }
              $filename="Data_Antrian".'.xlsx';
              $object->getActiveSheet()->setTitle("Data Antrian");
              header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
              header('Content-Disposition: attachment;filename="'.$filename.'"');
              header('Cache-Control: max-age=0');
              header("Pragma: no-cache");
              header("Expires: 0");

              $writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
              ob_end_clean();
              $writer->save('php://output');
              exit;
    }    
     
      public function cetak(){    
        ob_start();    
        $data['laporan'] =json_decode($this->curl->simple_get($this->API)); 
        $this->load->view('data/laporan_pdf', $data);    
        $html = ob_get_contents();        
        ob_end_clean();                
        require_once('./assets/html2pdf/html2pdf.class.php');    
        $pdf = new HTML2PDF('P','A4','en');    
        $pdf->WriteHTML($html);    
        $pdf->Output('Latihan laporan.pdf', 'D');  
      }

}
?>
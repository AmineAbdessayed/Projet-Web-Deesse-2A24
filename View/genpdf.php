<?php
use Dompdf\Dompdf;
use Dompdf\Options;


include_once "$_SERVER[DOCUMENT_ROOT]/temp/View/dompdf_1-0-2/dompdf/autoload.inc.php";
include_once "$_SERVER[DOCUMENT_ROOT]/temp/Controller/ParticipsC.php";
include_once '../config.php';
function afficherP(){
    $sql="SELECT * FROM particips";
    $db = config::getConnexion();
    
        $liste = $db->query($sql);
        return $liste;}
ob_start();
        include_once "$_SERVER[DOCUMENT_ROOT]/projet/pdfcontent.php";
$html = ob_get_contents();
ob_end_clean();

$options = new Options();

$options->set('defaultFont', 'Courier');

$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();
$fichier = 'mon-pdf.pdf';

$dompdf->stream($fichier);
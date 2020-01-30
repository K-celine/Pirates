<?php  

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Reservation_Pirates');
$pdf->SetTopMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Pirates');
$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage();
$book_id = $info_book->id;
$first_name = $this->session->userdata('first_name');
$last_name =  $this->session->userdata('last_name');
$username =  $this->session->userdata('username');
$email =  $this->session->userdata('email');
$match_datetime = $info_match->match_datetime; 
$name_home =$info_match->name_home;
$image_home =$info_match->image_home;
$name_visitor = $info_match->name_visitor;
$image_visitor =$info_match->image_visitor;
$number_seat= $info_book->number_seat;
$html = '

<h3 style="text-align:center">RESERVATION : </h3>
<div style=" border:0.7px solid black;">
<p>&nbsp;<img src="'.base_url().'assets/images/home/logos/Pirates.png" alt="logoPirates" width="90"/></p>
<h2>&nbsp;Ticket n° '.$book_id.' </b>&nbsp;&nbsp;&nbsp;&nbsp;<b>Réservé par :'.$last_name.' '.$first_name.'</h2>
<p>&nbsp;<b>Username : </b> '.$username.'&nbsp;&nbsp;&nbsp;&nbsp; <b> Adresse Email : </b> '.$email.'</p>
<p>&nbsp;<b>Date et Heure du Match :</b> '.$match_datetime.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nombre de places :</b> '.$number_seat.'</p>
<p>&nbsp;<b>Equipe à domicile :</b> ' .$name_home.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Equipe visiteur: </b> '.$name_visitor.'</p>
</div>
';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
ob_clean();
$pdf->Output('Reservation_Pirates.pdf', 'I');

?>
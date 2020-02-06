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
<div style="border:0.7px solid black; background-color: #FFFFF0;">
<p>&nbsp;<img src="'.base_url().'assets/images/home/logos/Pirates.png" alt="logoPirates" width="90"/></p>
<h3>&nbsp;TICKET N° '.$book_id.'&nbsp;&nbsp;&nbsp;&nbsp;PROPRIETAIRE :&nbsp;'.$last_name.' '.$first_name.'&nbsp;&nbsp;&nbsp;NOMBRE DE PLACES :&nbsp;'.$number_seat.'</h3>
<p>&nbsp;<b>MATCH DU :&nbsp;</b>'.$match_datetime.'&nbsp;&nbsp;&nbsp;<b>HOME :&nbsp;</b>'.$name_home.'&nbsp;&nbsp;&nbsp;&nbsp;<b>VISITOR :&nbsp;</b>'.$name_visitor.'</p>
</div>
';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
ob_clean();
$pdf->Output('Reservation_Pirates.pdf', 'I');

?>
<?php  

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Reservation_Pirates');
$pdf->SetTopMargin(5);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Pirates');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();

//Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)
$pdf->Image(''.base_url().'assets/images/match/ticket_fond.png', 10, 45, 190, 85, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);


$book_id = $info_book->id;
$first_name = $this->session->userdata('first_name');
$last_name =  $this->session->userdata('last_name');
$match_datetime = $info_match->match_datetime; 
$name_home =$info_match->name_home;
$name_visitor = $info_match->name_visitor;
$number_seat= $info_book->number_seat;
$html1 = '
<body>
<div>
<h3 style="text-align:center;">LET\'S GO PIRATES !!</h3>
<p>Votre réservation a bien été enregistrée, merci pour votre soutien à l\'équipe des Pirates.</p>
<p>Veuillez vous munir de ce ticket le jour du match.</p>
<div>
</div>
</body>
';
$html = '
<body>
<p>&nbsp;<b>TICKET N° </b>'.$book_id.'&nbsp;&nbsp;&nbsp;&nbsp;<b>PROPRIETAIRE :&nbsp; </b>'.$last_name.' '.$first_name.'&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;<b>MATCH DU :&nbsp;</b>'.$match_datetime.'&nbsp;&nbsp;&nbsp;<b>NOMBRE DE PLACES :</b>&nbsp;'.$number_seat.'</p>
<p>&nbsp;<b>HOME :&nbsp;</b>'.$name_home.'&nbsp;&nbsp;&nbsp;&nbsp;<b>VISITOR :&nbsp;</b>'.$name_visitor.'</p>
</div>
</body>
';


// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
$pdf->writeHTMLCell(0, 0, '10', '0', $html1, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '25', '80', $html, 0, 1, 0, true, '', true);

ob_clean();
$pdf->Output('Reservation_Pirates.pdf', 'I');

?>
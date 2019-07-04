<?php

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetFont('helvetica', 'B', 20);

$pdf->AddPage();

$pdf->Write(0, 'Meegahajandura Gramaniladari Devision', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

$tb2 = <<<EOD
<table border="1">
<thead>
 <tr style="background-color:#FFFF00;color:#0000FF;">
  <td width="50" align="center"><b>NIC</b></td>
  <td width="120" align="center"><b>Full Name</b></td>
  <td width="140" align="center"><b>Address</b></td>
  <td width="80" align="center"> <b>Phone Number</b></td>
  <td width="80" align="center"><b>Job</b></td>
  <td width="45" align="center"><b>Role</b></td>
  <td width="45" align="center"><b>Status</b></td>
 </tr>
 
</thead>
</table>
EOD;
$pdf->writeHTML($tb2, true, false, false, false, '');
foreach ($h->result() as $row){ 
                    $tb3 = <<<EOD
                    <table >
                    <tr>
<td style="border-right:1px solid black;" width="50" align="center">{$row->NIC}</td>
<td style="border-right:1px solid black;" width="120" align="center">{$row->full_name}</td>
<td style="border-right:1px solid black;" width="140" align="center">{$row->address}</td>
<td style="border-right:1px solid black;" width="80" align="center"> {$row->phone_number}</td>
<td style="border-right:1px solid black;" width="80" align="center">{$row->job}</td>
<td style="border-right:1px solid black;" width="45" align="center">{$row->role}</td>
<td style="border-right:1px solid black;" width="45" align="center">{$row->status}</td>
</tr>
</table>
EOD;
                

$pdf->writeHTML($tb3, true, false, false, false, '');
                }

$pdf->Output('My-File-Name2.pdf', 'I');
<?php
    require('tfpdf/tfpdf.php');

    require_once "connect.php";

    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','Arial.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();

    $pdf->Cell(80);
    $pdf->Cell(30,10,'Игры',1,0,'C');
    $pdf->Ln(20);

    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);

    $header = array("п/п","Название","Жанр","Разработчик","Издатель","Ключ","Дата приобретения","Дата окончания","URL магазина");
    $w = array(6,30,25,25,25,20,20,17,25);
    $h = 10;
    for ($c = 0; $c < 9; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
    }
    $pdf->Ln();

    // Запрос на выборку сведений о пользователях
    $result = $mysqli->query("SELECT
        Games.name as game_name,
        Games.genre as game_genre,
        Games.developer as game_developer,
        Games.publisher as game_publisher,
        GameKeys.key_code,
        GameKeys.purchase_date,
        GameKeys.expiry_date,
        Stores.url as store_url
        FROM GameKeys
        LEFT JOIN Games ON GameKeys.game_id=Games.id
        LEFT JOIN Stores ON GameKeys.store_id=Stores.id"
    );

    if ($result){
        $counter = 1;
        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 9; $c++){
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
            }
            $pdf->Ln();
            $counter++;
        }
    }

    $pdf->Output("I",'Games.pdf',true);
?>
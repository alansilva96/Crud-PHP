<?php

include './Database.php';
$sql = "select a.model,b.fat_part_no,b.total_location,c.parts_no,c.unt_usg,c.description,c.ref_designator from dqcmodel a, dqc84 b, dqc841 c;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$arqExcel = "<meta charset='UTF-8'>";

        $arqExcel .= "<table class='tb-hover'>
            <thead>
                <tr>
                    <th scope='col'>Model</th>
                    <th scope='col'>Fat_part_no</th>
                    <th scope='col'>Total_location</th>
                    <th scope='col'>Parts_no</th>
                    <th scope='col'>Unt_USG</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Ref_designation</th>
                </tr>
            </thead>
            <tbody>";

                while($row = $result->fetch_assoc()){

               $arqExcel.= "<tr>
                    <td>{$row['model']}</td>
                    <td>{$row['fat_part_no']}</td>
                    <td>{$row['total_location']}</td>
                    <td>{$row['parts_no']}</td>
                    <td>{$row['unt_usg']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['ref_designator']}</td>
                    </tr>";
                }

          $arqExcel .= "</tbody>
        </table>";
          
          header("Content-Type: application/xls");
          header("Content-Disposition:attachment; filename = report.xls");
          echo $arqExcel;
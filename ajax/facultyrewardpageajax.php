<?php

session_start();
include "../requiredfiles/dbconnection.php";

$topic = $_POST['topic'];

$sql = "SELECT * FROM `login_details` WHERE type = 'student'";
$res = $con->query($sql);

echo '<table class="table table-hover table-bordered" align="center">
<thead align="center">
  <tr style="color: white">
    <th scope="col">Roll NO</th>
    <th scope="col">Name</th>
    <th scope="col">Attend</th>
    <th scope="col">Mark</th>
  </tr>
</thead>
<tbody align="center">';

foreach($res as $key => $value){
    echo '
      <tr style="color: white">
        <th scope="row">'.$value['userid'].'</th>
        <td>'.$value['name'].'</td>
        ';
        $sql2 = "SELECT * FROM `topics_details` WHERE topic_name = '{$_SESSION["topic"]}'";
        $res2 = $con->query($sql2);
        foreach($res2 as $value2){
            if($value2[$value['userid']] == "yes"){
                echo '<td style="color:#00ff47"><b>Attended</b></td>';
            }else{
                echo '<td style="color:#e9ff00"><b>Not Attended</b></td>';
            }
        }
    echo '
        <td>';

        $sql3 = "SELECT * FROM `questions_details` WHERE quiz_name = '{$_SESSION["topic"]}'";
        $res3 = $con->query($sql3);

        $totalmark = 0;
        $correctmark = 0;

        $userid = $value['userid'].'_answer';

        foreach($res3 as $key => $value){
            if($value[$userid] == $value[$value['correct-option']]){
                $correctmark++;
            }
            $totalmark++;
        }

        echo $correctmark.'/'.$totalmark;
        
        echo '</td>
      </tr>
    ';
}

echo '</tbody>
</table>';

?>
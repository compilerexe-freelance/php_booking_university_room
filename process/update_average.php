<?php
require_once('config.php');
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM tb_question WHERE id='$id'";
$result = $conn->query($sql);

$average_max = 0;
$average_center = 0;
$average_min = 0;

while ($row = $result->fetch_assoc()) {

    if ($row['question_one'] == 'มากที่สุด' || $row['question_one'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_one'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_one'] == 'น้อย' || $row['question_one'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_two'] == 'มากที่สุด' || $row['question_two'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_two'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_two'] == 'น้อย' || $row['question_two'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_three'] == 'มากที่สุด' || $row['question_three'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_three'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_three'] == 'น้อย' || $row['question_three'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_four'] == 'มากที่สุด' || $row['question_four'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_four'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_four'] == 'น้อย' || $row['question_four'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_five'] == 'มากที่สุด' || $row['question_five'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_five'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_five'] == 'น้อย' || $row['question_five'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_six'] == 'มากที่สุด' || $row['question_six'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_six'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_six'] == 'น้อย' || $row['question_six'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_seven'] == 'มากที่สุด' || $row['question_seven'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_seven'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_seven'] == 'น้อย' || $row['question_seven'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_eight'] == 'มากที่สุด' || $row['question_eight'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_eight'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_eight'] == 'น้อย' || $row['question_eight'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

    if ($row['question_nine'] == 'มากที่สุด' || $row['question_nine'] == 'มาก') {
      $average_max++;
    } else {
      if ($row['question_nine'] == 'พอใช้') {
        $average_center++;
      } else {
        if ($row['question_nine'] == 'น้อย' || $row['question_nine'] == 'น้อยที่สุด') {
          $average_min++;
        }
      }
    }

}

$result_max = $average_max / 9;
$result_center = $average_center / 9;
$result_min = $average_min / 9;

if ($result_max > $result_center) {
  if ($result_max > $result_min) {
    $sql = "UPDATE tb_question SET average = 'มาก'  WHERE id = '$id'";
    $conn->query($sql);
  }
}

if ($result_center > $result_min) {
  if ($result_center > $result_max) {
    $sql = "UPDATE tb_question SET average = 'ปานกลาง'  WHERE id = '$id'";
    $conn->query($sql);
  }
}

if ($result_min > $result_center) {
  if ($result_min > $result_max) {
    $sql = "UPDATE tb_question SET average = 'น้อย'  WHERE id = '$id'";
    $conn->query($sql);
  }
}

header('location: ../rating.php');
exit(0);

?>

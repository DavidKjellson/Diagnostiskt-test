<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function doctors()
{
  $personer = [
    "Dr. Cooper",
    "Mrs. Dalloway",
    "Mr. Dalloway",
    "Dr. Mabuse",
    "Col. Stephens",
    "Dr. Ashcroft"
  ];

  $onlyDoctors = array_filter($personer, function ($var) {
    return (stripos($var, "Dr.") !== false);
  });

  $arrToString = implode("<li>", $onlyDoctors);

  $removeTitle = str_replace("Dr. ", "", $arrToString);

  return "<li>" . strtolower($removeTitle) . "</li>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diagnostiskt test</title>
</head>

<body>
  <ul>
    <?php echo doctors(); ?>
  </ul>
</body>

</html>
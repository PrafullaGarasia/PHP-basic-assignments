<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Developer Jobs - Search</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <img src="images/header.png" alt="Developer Jobs" />
  <img src="images/developer.jpeg" alt="Developer Jobs" />
  <h3>Developer Jobs - Search Results</h3>

<?php

    //Get user search term
  $user_search = $_GET['usersearch'];

  // Start generating the table of results
  echo '<table border="0" cellpadding="2">';

  // Generate the search result headings
  echo '<tr class="heading">';
  echo '<th>Job Title</th><th>Description</th><th>Province&nbsp;/&nbsp;State</th><th>Date Posted</th>';
  echo '</tr>';

  // Connect to the database
  require_once('connectvars.php');
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Query to get the results
  $query = "SELECT * FROM developer_jobs WHERE title = '$user_search'";
  $result = mysqli_query($dbc, $query);
  while ($row = mysqli_fetch_array($result)) {
    echo '<tr class="results">';
    echo '<td valign="top" width="20%">' . $row['title'] . '</td>';
    echo '<td valign="top" width="50%">' . $row['description'] . '</td>';
    echo '<td valign="top" width="10%">' . $row['province'] . '</td>';
    echo '<td valign="top" width="20%">' . $row['date_posted'] . '</td>';
    echo '</tr>';
  } 
  echo '</table>';

  mysqli_close($dbc);
?>

</body>
</html>

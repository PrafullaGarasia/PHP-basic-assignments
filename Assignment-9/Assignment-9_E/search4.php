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
  $search_query = "SELECT * FROM developer_jobs";

  $where_list = array();
  $user_search = $_GET['usersearch'];

  //Extract the search keywords into an array
  $clean_search = str_replace(',', ' ', $user_search);
  $search_words = explode(' ', $clean_search);

  $final_serch_words = array();

  if (count($search_words) > 0)
  {
    foreach ($search_words as $word)
    {
        if (!empty($word))
        {
            $final_serch_words[] = $word;
        }
    }
  }

// Generate a WHERE clause using all of the search keywords
$where_list = array();
if (count($final_serch_words) > 0)
{
  foreach($final_serch_words as $word)
  {
    $where_list[] = "description LIKE '%$word%'";
  }
}
  $where_clause = implode(' OR ', $where_list);
// Add the keyword WHERE clause to the search query
  if (!empty($where_clause))
  {
    $search_query .= " WHERE $where_clause";
  }

  $result = mysqli_query($dbc, $search_query);
  while ($row = mysqli_fetch_array($result)) 
  {
    echo '<tr class="results">';
    echo '<td valign="top" width="20%">' . $row['title'] . '</td>';
    echo '<td valign="top" width="50%">' . substr($row['description'],0,100) . '....</td>';
    echo '<td valign="top" width="10%">' . $row['province'] . '</td>';
    echo '<td valign="top" width="20%">' . substr($row['date_posted'],0,10) . '</td>';
    echo '</tr>';
  } 
  echo '</table>';

  mysqli_close($dbc);
?>

</body>
</html>

<?php
  $mysqliPointer = new mysqli( "localhost" , "masuki" , "masuki" , "masuki" );
  if( empty( $mysqliPointer ) ) {
    echo "db connection error.";
    exit;
  }

  $query = "SELECT ID , Name , CountryCode , District , Population FROM city LIMIT 0 , 20";
  $result city = $mysqliPointer->query( $query );
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MySQL Sample Database Demo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Database List</a>
      </div>
    </nav>
    <div class="container">
      <h3>city</h3>
      <table class="table table-primary">
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>CountryCode</th>
          <th>District</th>
          <th>Population</th>
        </thead>
        <tbody>
          <?php while( $row = $result->fetch_assoc() ) { ?>
            <tr>
              <td><?php echo $row[ 'ID' ]; ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="container">
      <h3>country</h3>
      <table class="table table-secondary">
        <thead>
          <th>Code</th>
          <th>Name</th>
          <th>Continent</th>
          <th>Region</th>
          <th>SurfaceArea</th>
          <th>IndepYear</th>
          <th>Population</th>
          <th>LocalName</th>
          <th>HeadOfState</th>
          <th>Capital</th>
          <th>Code2</th>
        </thead>
      </table>
    </div>
    <div class="container">
      <h3>countrylanguage</h3>
      <table class="table table-info">
        <thead>
          <th>CountryCode</th>
          <th>Language</th>
          <th>CountryCode</th>
          <th>IsOfficial</th>
          <th>Percentage</th>
        </thead>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>


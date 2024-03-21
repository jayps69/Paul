<table id="example2" class="table table-striped nowrap" style="width:100%">
        <thead>
          <tr>

            <th scope="col">TITLE</th>
            <th scope="col">RATING</th>
            <th scope="col">DATE OF EXAMINATION</th>
            <th scope="col">PLACE OF EXAMINATION</th>
            <th scope="col">LICENSE NO.</th>
            <th scope="col">DATE OF VALIDITY</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Display educationtbl to data table
          $query = "SELECT idno, title, rating, dateofexamination, placeofexamination, licensenumber, dateofvalidity FROM eligibilitytbl WHERE userid = $userId";
          $result = mysqli_query($conn, $query);
          if ($result) {
            if (mysqli_num_rows($result) > 0) {

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "<td>" . $row['dateofexamination'] . "</td>";
                echo "<td>" . $row['placeofexamination'] . "</td>";
                echo "<td>" . $row['licensenumber'] . "</td>";
                echo "<td>" . $row['dateofvalidity'] . "</td>";
                echo "</tr>";
              }
            }
          }
          ?>
        </tbody>
      </table>
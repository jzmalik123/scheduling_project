<?php
include_once "header.php";
?>
<div class="body">
  <div class="container">
    <h2 class="text-center">View Meeting</h2>
    <table border="1">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Description</th>
          <th>Start Time</th>
          <th>Duration</th>
          <th>Status</th>
          <th>Password</th>
          <th>Created at</th>
          <th>Updated at</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        global $con;
        $sql = "select * from meetings";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td>
              <?php echo $row['title']; ?>
            </td>
            <td><?php echo $row['description']; ?></td>
            <td>
              <?php echo $row['start_time']; ?>
            </td>
            <td><?php echo $row['duration']; ?></td>
            <td>
              <?php echo $row['status']; ?>
            </td>
            <td><?php echo $row['password']; ?></td>
            <td>
              <?php echo $row['created_at']; ?>
            </td>
            <td><?php echo $row['updated_at']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</body>

</html>
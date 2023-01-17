<?php
include_once "header.php";
requireLogin();
?>
<div class="body">
  <div class="container">
    <h2 class="text-center">My Meetings</h2>
    <a href="create.php"><button class="btn-input">Add New</button></a>
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
          <th width="20%">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        global $db;
        $sql = "select * from meetings";
        $result = mysqli_query($db, $sql);
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
            <td>
              <a href="update.php?id=<?php echo $row['id']; ?>"><button class="btn-info">Update</button></a>
              <a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn-info">Delete</button></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</body>

</html>
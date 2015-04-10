<?php
  include 'db.php';
  $sql="SELECT * FROM results ORDER BY created_at";

  if ($result=mysqli_query($con,$sql))
    {

    while ($row=mysqli_fetch_row($result))
      {
        ?>
          <li>
            <?php echo $row[0]; ?>
            <?php echo $row[1]; ?>
            <?php echo $row[3]; ?>

            <pre><code class="html"> <?php echo $row[2]; ?></code>
            </pre>

          </li>
        <?php
      }

    mysqli_free_result($result);
  }

  mysqli_close($con);

?>

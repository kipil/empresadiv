<?php 
include 'conn.php';
      $sql = "Select nombre from municipios";
      $result = mysqli_query($conn,$sql);
      
      if(mysqli_num_rows($result)>0)
      {
          while($row = mysqli_fetch_assoc($result)){
              echo "<option> " .$row["nombre"],"</option>";

          }
      }else{
          echo "Cero Results";
      }

      mysqli_close($conn);
?>
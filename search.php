<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Code to Fetch All Data from MySQL Database and Display in html Table</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <form  method="post" action="search.php">
<div class="input-group">
  <input type="text" class="form-control rounded" name="searchnames" placeholder="Search Name..." aria-label="Search"
    aria-describedby="search-addon"/>
  <input type="submit" name="search" class="btn btn-dark btn-rounded" value="Search">
</div>
</form>


        <div class="col-md-12">
            <div class="float-left"> 
                <h2>REPORT CRIME ISSUES</h2>
            </div>            
           
           

            <table class="table table-hover table-bordered table-secondary">
              <thead>
                <tr>
                  
                    <th scope="col">#</th>
                  <th scope="col">names</th>
                  <th scope="col">email</th>
                  <th scope="col">address</th>
                  <th scope="col">phone</th>
                  <th scope="col">occupation</th>
                  <th scope="col">message</th>
                 <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
           
    // include 'mydbCon.php';
               
                include "database.php";

                $s=$_POST["searchnames"];
                 
                $sql="SELECT * FROM rform WHERE names LIKE '%$s%'";

                $result = $conn->query($sql);
                ?>

                <?php if ($result->num_rows > 0){ ?>

                <?php while($array=mysqli_fetch_row($result)){ ?>

                <tr>
                <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    

                    
                    <td> 
                      
                      
                </tr>

                <?php } ?>

                <?php } else{ ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">NO data found</td>
                </tr>
                <?php } ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>


</body>
</html>

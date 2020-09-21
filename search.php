<html>
    <head>

    </head>
    <body>


        <?php
            if(isset($_REQUEST["search"])){
                $searchid=$_REQUEST["search"];?>

        <table  border="1px">
            <tr>
                <td>ID SERIAL</td>
                <td>DATABASE ID SERIAL</td>
                <td>Firstnsme</td>
                <td>Lastname</td>
                <td>Gmail</td>
                <td>PASSWORD</td>
                <td>Profile Picture</td>
                <td>Action</td>
            </tr> 
           

            <?php
            
            $host="localhost";
            $dbuser="diplawrence";
            $dbps="jahidul007";
            $dbname="databasetowebsite";

            $connectdb=mysqli_connect($host,$dbuser,$dbps,$dbname);
                if($connectdb==false){

            echo "database not connect";

            };

            $mytable="SELECT * FROM website WHERE fname LIKE '%$searchid%'";
            $runmytable=mysqli_query($connectdb,$mytable);
            if($runmytable==true){
                $countserial=1;
                while($showtable=mysqli_fetch_array($runmytable)){?>

                <tr>
                    <td><?php echo $countserial;$countserial++;?></td>
                    <td><?php echo $showtable['id'];?></td>
                    <td><?php echo $showtable['fname'];?></td>
                    <td><?php echo $showtable['lname'];?></td>
                    <td><?php echo $showtable['gmail'];?></td>
                    <td><?php echo $showtable['pass'];?></td>
                    <td><center><img width="60px" src="image/<?php echo $showtable['avatar'];?>"/></center></td>
                    <td><a href='edit.php?getid=<?php echo $showtable['id'];
                    ?>'>Edit</a> ! <a onclick="return confirm('Are You Sure')" href='delete.php?id=<?php echo $showtable['id'];?>'>Delete</a></td>
                 </tr> 




                  
                <?php };};?>

        </table>

          <?php };?>
           

       
         
             
    </body>

</html>
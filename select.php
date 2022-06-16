<?php 
 include("includes/connection.php"); 

 echo $sql="select id,post_at,title,description from data ";
  $result = mysqli_query($conn,$sql);
   
   
   
 echo ' <tr> 
              <th>Sr.No</th> 
              <th>Date</th> 
              <th>Title</th> 
              <th>Description</th> 
              <th>Delete</th> 
              </tr>'; 
   
 $i=1; 

 while($data=mysqli_fetch_array($result)) 
 { 
              echo ' 
             
      <tr> 
         <td>'.$i.'</td> 
         <td>'.$data['post_at'].'</td> 
         <td>'.$data['title'].'</td> 
         <td>'.$data['description'].'</td>
         <td><a href="index.php?del_id='.$data['id'].'" class="btn btn-danger" >Delete</a></td> 
       </tr>'; 
               
               $i++; 
 } 
   
 ?> 
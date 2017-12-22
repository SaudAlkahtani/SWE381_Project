<?php
session_start();
require 'db.php';
$output = '';
$sql = "SELECT * FROM items ORDER BY id DESC";
$result = mysqli_query($conn, $sql);



$output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="20%">Img</th>  
                     <th width="20%">Name</th>  
                     <th width="40%">Discription</th>  
                     <th width="10%">Price</th>  
                     <th width="10%">Delete</th>  
                </tr>';
if(mysqli_num_rows($result) > 0)
{
    $user_email = $_SESSION['email'];
    while($row = mysqli_fetch_array($result)) {
        if ($user_email == $row['seller'] ) {
            $output .= '  
                <tr>  
                     <td>' . $row["id"] . '</td>  
                     <td class="img"   data-id0="' . $row["id"] . '" contenteditable><img style="height: 20px;width: 20px" src="' . $row["img"] . '"/></td>  
                     <td class="name" data-id1="' . $row["id"] . '" contenteditable>' . $row["name"] . '</td>  
                     <td class="discription" data-id2="' . $row["id"] . '" contenteditable>' . $row["discription"] . '</td> 
                     <td class="price" data-id3="' . $row["id"] . '" contenteditable>' . $row["price"] . '</td>  
 
                     <td><button type="button" name="delete_btn" data-id4="' . $row["id"] . '" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';
            continue;
        }

        if ("admin@gmail.com" == $user_email){
            $output .= '  
                <tr>  
                     <td>' . $row["id"] . '</td>  
                     <td class="img"   data-id0="' . $row["id"] . '" contenteditable><img style="height: 20px;width: 20px" src="' . $row["img"] . '"/></td>  
                     <td class="name" data-id1="' . $row["id"] . '" contenteditable>' . $row["name"] . '</td>  
                     <td class="discription" data-id2="' . $row["id"] . '" contenteditable>' . $row["discription"] . '</td> 
                     <td class="price" data-id3="' . $row["id"] . '" contenteditable>' . $row["price"] . '</td>  
 
                     <td><button type="button" name="delete_btn" data-id4="' . $row["id"] . '" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';
        }
        }
    $output .= '  
           <tr>  
                <td>add</td>  
                <td id="img" contenteditable></td>  
                <td id="name" contenteditable></td>  
                <td id="discription" contenteditable></td>  
                <td id="price" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';
}
else
{
    $output .= '<tr>  
                          <td colspan="4"> not items add </td>  
                     </tr>';
}
$output .= '</table>  
      </div>';
echo $output;
?>
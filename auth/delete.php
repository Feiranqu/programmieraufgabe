<?php
define('SECURE',true);
 include('../inc/login.inc.php');

 if(!empty($_POST)){
       $output='';
       $message='';
       if($_POST["entry_id"]!=NULL) {
             if($_POST["deleteIMG"]!=NULL) {
                   $target_dir="../lexikon-img/";
                   $checkFile = $_POST['deleteIMG'];
                    if(file_exists($target_dir.$checkFile)){
                          unlink($target_dir.$checkFile);
                    }        
             }    
      }
      $result=$con->query("DELETE FROM content WHERE id=".$_POST["entry_id"]);
      $message='Data Deleted';
       if($result){
             $output.='<label class="text-success">'.$message.'</label>';
             $result= $con->query("SELECT * FROM content ORDER BY id DESC");
             $output.='
               <table class="table table-striped table-dark">';
               while($row=$result->fetch_assoc()){
                     $output.='
                        <tr>
                            <td>'.$row["id"].'</td>
                            <td><button type="button"
                              class="card-title btn edit_data"
                              name="edit"
                              id="'.$row["id"].'"
                              data-toggle="modal">
                              <i class="fas fa-edit"></i>
                             </button></td>
                             <td><button type="button"
                               class="card-title btn delete_data"
                               name="delete"
                               id="'.$row["id"].'"
                               data-toggle="modal"> 
                               <i class="fas fa-trash"></i>
                            </button></td>
                         </tr>
                     ';
               }
               $output.='</table>';
            }
            echo $output;
      }
      ?>         

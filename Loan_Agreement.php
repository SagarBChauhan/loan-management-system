<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                padding:0;
                margin: 0;
                background:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0.5)), url(img/Hard-money-Loan-Miami-refreshfunding-39707357-720-406.jpg) ;
                background-size: cover;
            }
            table{
                margin-top: 10%;
                background: white;
            }
            input{
                padding-right: 40px;
                border-radius: 10px 10px 0px 10px;
                padding-left: 25px;
                border:  2px solid white;
                background-color: skyblue;
                color: white;
                opacity: 1;
            }
            input{
                padding-right: 40px; 
                padding-left: 25px;
                background-color: skyblue;
                color: white;
                transition: 0.8s;
                opacity: 1;
            }
            input:hover{
                padding-left: 40px; 
                padding-right: 25px;
                background-color: royalblue;
                border-radius: 0px 10px 10px 10px;
                box-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                text-shadow: 1px 1px 200px white, 0 0 25px yellow, 0 0 5px white;
                transition: 0.8s;
                opacity: 1;
            }
        </style>
    <body>
    <?php
    $docs= array();
    if (isset($_FILES['doc'])) 
          { 
            $date= date("y-m-d-h-m-s");
            for($i=0;$i<3;$i++)
            {
            $errors = array(); 
            $file_name = $_FILES['doc']['name'][$i]; 
            $file_size = $_FILES['doc']['size'][$i]; 
            $file_tmp = $_FILES['doc']['tmp_name'][$i]; 
            $file_type = $_FILES['doc']['type'][$i];            
            $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); 
            $target_file = "upload/" .$date."/". basename($_FILES["doc"]["name"][$i]); ?> 
                <?php 
                #echo $file_ext; 
                $expensions = array("jpeg", "jpg", "png","pdf"); 
                if (file_exists($target_file)) 
                { 
                    echo "Sorry, file already exists.";                   
                } 
                else if (in_array($imageFileType, $expensions) === false) 
                { 
                    $errors[] = "Extension not allowed,Only allowed JPEG or PNG file.";
                } 
                else if ($file_size > 2097152) 
                { 
                    $errors[] = 'File size must be excately 2 MB';                     
                }
                else 
                {
                    if (empty($errors) == true)
                    { 
                        
                        
                        $path="./upload/$date";
                        if(file_exists($path))
                        {
                            move_uploaded_file($file_tmp, "upload/" .$date."/". $file_name);
                        }
                        else
                        {
                            mkdir($path);
                        }
                        
                        move_uploaded_file($file_tmp, "upload/" .$date."/". $file_name); 
                        $docs[]= "<img src=".$target_file." width=100% />";
                        $links[]=$target_file;
                    }
                    else 
                    {?> 
                        File Uploaded Status<?php print_r($errors); ?>
                        <?php                    
                    }                 
                }  
            }          
        }
        
    ?> 
    <center>
        <table border=0 style='border:solid 6px gray; padding: 10px;width:60%;'>
            <tbody>
                <tr>
                    <td colspan=2>
                        <table border=0 style='width:100%;'>
                            <tr>
                                <td style='width:50%;'><?php echo $_POST['name']; ?></td>
                                <td style='float:right;padding-right:60px; '><?php echo date('d-m-Y'); ?></td>
                            </tr>
                            <tr>
                                <td style='float:right; '><u><i><b><?php echo $_POST['loan_type']; ?></b></i></u></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <p style='text-indent: 100px;'>
                            Hello,<?php echo $_POST['name']; ?> you are applying for <b><?php echo $_POST['loan_type']; ?> </b>Type of lone that check below details given by.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <table border='1' style='margin: auto;width:80%; '>
                            <thead>
                                <tr>
                                    <th>PAN card</th>
                                    <th>Aadhar card</th>
                                    <th>Salary slip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href='<?php echo $links[0]; ?>'><?php echo $docs[0]; ?></a></td>
                                    <td><a href='<?php echo $links[1]; ?>'><?php echo $docs[1]; ?></a></td>
                                    <td><a href='<?php echo $links[2]; ?>'><?php echo $docs[2]; ?></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border='0'>
                            <tr>
                                <td  style='width:70%;'></td>
                                <td colspan=2 style='text-align:center; padding-right:60px; float:right; '>
                                    <h3>Signature</h3>
                                    <h3>________________________</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <input style='padding:10px; width: 100px;margin-top: 3%; margin-bottom: 3%;' type='button' onclick='window.print()' name='print' value='print'>
    </center>
    </body>
</html>

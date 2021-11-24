<?php
session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){
        //check user emil is valid or not
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){   //if user is valid
           //check that email already exist in databasr or not
           $sql = mysqli_query($conn,"SELECT email FROM user WHERE email = '{$email}'");
           if(mysqli_num_rows($sql) > 0) {      //if email already exist
                echo "$email .already exist!";
           } 
           else{
               //check user uploaded file or not
               if(isset($_FILES['image'])){      //if file is uploaded
                    $img_name = $_FILES['image']['name'];       //getting user uploaded img name 
                    $img_type = $_FILES['image']['type'];       //getting user uploaded img type
                    $tmp_name = $_FILES['image']['tmp_name'];   //this temporary name is used to save/ move file in our folder

                    //expolde the image and get the last extensions like jpg png
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);       //here we get the extension of an user uploaded image file

                    $extensions = ['png','jpeg','jpg'];    //these are some valid image extensions and store them in array
                    if(in_array($img_ext, $extensions) === true){      //if user uploaded img ext is matched with any array extension
                        $time = time();         //this will return us current time..
                                                //we need this time because when u uploading user image to our folder we rename user file with current time
                                                //so all the image file will have a unique name
                        //lets move the user uploaded file into our particular folder
                        $new_img_name  = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){     //if user upload imagee move to our folder successfully
                            $status = "Active now";      //once the user signed up ,his status will be active now)
                            $random_id = rand(time(), 10000000);       //creating random id for user
                            
                            //lets insert all user data inside table
                            $sql2 = mysqli_query($conn, "INSERT INTO user(unique_id, fname, lname, email, password, image, status)
                                                                VALUES({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                            if($sql2){      //if these data inserted
                                $sql3 = mysqli_query($conn,"SELECT * FROM user WHERE email = '{$email}'");
                                 
                                if(mysqli_num_rows($sql3) > 0){
                                    $result = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    echo "success";
                                }else{
                                    echo "This email address not Exist!";
                                }                                 
                            }else{
                                echo "Something went wrong!";
                            }
                        }
                       

                    }else{
                        echo "Please select an image file - jpeg, jpg, png!";
                    }

               }else{
                   echo "Please select an image file !";
               }
           }  
           

        }else{
            echo "this is not a valid email";
        }
    }else{
        echo "All input fields are required";
    }
?>
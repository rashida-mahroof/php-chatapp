<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat Application</title>
    <script src="https://kit.fontawesome.com/56967154cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text">this is an error message</div>
                    <div class="name_details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        </div>
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="text" name="email" placeholder="Enter Your Email Address" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter New Password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class=" field image">
                            <label>Select Profile</label>
                            <input type="file" name="image">
                        </div>
                        <div class=" field button">
                            
                            <input type="submit" value="Continue to Chat">
                        </div>
                        <div class="link">Already Signed Up <a href="">Login Now</a></div>
                    
            </form>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>
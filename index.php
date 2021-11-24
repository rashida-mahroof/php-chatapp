<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" autocomplete="off">
                <div class="error-text"></div>
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
                        <div class="link">Already Signed Up <a href="login.php">Login Now</a></div>
                    
            </form>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="wrapper">
        <div class="registration_form">
            <div class="title">
                Student Registration
            </div>

            <form action="./actions/register_action.php" method="post">
                <div class="form_wrap">
                    <div class="input_grp">
                        <div class="input_wrap">
                            <label for="fname">Name</label>
                            <input type="text" id="fname" name="name">
                        </div>
                        <div class="input_wrap">
                            <label for="lname">Roll No</label>
                            <input type="text" id="lname" name="id_no">
                        </div>
                    </div>
                    <div class="input_wrap">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="input_wrap">
                        <label>Gender</label>
                        <ul>
                            <li>
                                <label class="radio_wrap" style="cursor: pointer;">
                                    <input type="radio" name="gender" value="male" class="input_radio" checked>
                                    <span>Male</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap" style="cursor: pointer;">
                                    <input type="radio" name="gender" value="female" class="input_radio">
                                    <span>Female</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="input_wrap">
                        <label for="city">Floor Number</label>
                        <input type="text" id="city" name="floor">
                    </div>
                    <div class="input_wrap">
                        <label for="country">Room Number</label>
                        <input type="text" id="country" name="room">
                    </div>
                    <div class="input_wrap">
                        <input type="submit" value="Register Now" class="submit_btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
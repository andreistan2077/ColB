<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../resources/profile/Profile.ico"/>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/menus.css">
    <script src="../js/menus.js"></script>

</head>

<body>


<div class="containerM">

    <div class="menuShortcut">

        <button id="menuShortcut-foreground" onclick="focusF(); transform()" class="menuShortcut-button" title="Click to open the shortcuts menu"></button>
        <button id="menuShortcut-background" onclick="focusB(); transformBack()" class="menuShortcut-button" title="Click to close the menu"></button>
        <div class="menuShortcut-Search" id="search" onclick="openWindow('../html/search.html','_self');" title="Click to open the search webpage"></div>
        <div class="menuShortcut-Post" id="post" onclick="openWindow('../html/post.html','_self');" title="Click to open the post webpage"></div>
        <div class="menuShortcut-Info" id="info" onclick="openWindow('../html/aboutUs.html','_self');" title="Click to open the about us webpage"></div>

    </div>

    <button id="menuProfile-foreground" onclick="focusPfF(); transformPf()" class="menuProfile-button" title="Click to open the profile menu"></button>
    <button id="menuProfile-background" onclick="focusPfB(); transformBackPf()" class="menuProfile-button" title="Click to close the menu"></button>
    <div class="menuProfile-Login" id="login" onclick="openWindow('../html/login.html','_self');" title="Click to open the login webpage"></div>
    <div class="menuProfile-Profile" id="profile" onclick="openWindow('../php/profile.php','_self');" title="Click to open the profile webpage"></div>
    <div class="menuProfile-Inventory" id="inventory" onclick="openWindow('../php/inventory.php','_self');" title="Click to open the inventory webpage"></div>

</div>


<div class="Profile-Container">
    <div class="Profile-Wrap">
        <div class="account">

        <div class="title">
            <span>Profile Details</span>
        </div>

        <form action="profileR.php" method="post">

            <div class="account">
                <div class="accountTxt">
                    <p>Enter your desired profile details</p>
                </div>
            </div>


            <div class="row">
                <img class="img1" src="../resources/profile/Person.png" alt="ProfilePerson"/>
                <label>
                    <input type="text" name="name" placeholder="Profile name" required>
                </label>
            </div>

            <div class="row">
                <img class="img2" src="../resources/profile/Phone.png" alt="ProfilePhone"/>
                <input type="number" name="phoneNr" placeholder="Phone number" required>
            </div>

            <div class="row">
                <img class="img3" src="../resources/profile/Country.png" alt="ProfileCountry"/>
                <input type="text" name="country" placeholder="Country of residence" required>
            </div>

            <div class="row">
                <img class="img3" src="../resources/profile/City.png" alt="ProfileCity"/>
                <input type="text" name="city" placeholder="City of residence" required>
            </div>


            <div class="row button">
                <input type="submit" value="Update details">
            </div>


        </form>
        </div>
    </div>
</div>


<div class="Profile-Container">
    <div class="Profile-Wrap">
        <div class="account">

            <div class="title2">
                <span>Current profile details</span>
            </div>
        </div>

                    <div class="accountTxt2">
                        <p>Profile Name : <?php

                        include('connectDB.php');
                        $id = $_COOKIE['id'];

                        $qry = "SELECT pfName FROM `users` WHERE id='$id'";
                        $resultSet = mysqli_query($con,$qry);

                        if (mysqli_num_rows($resultSet) > 0) {
                          while($row = mysqli_fetch_assoc($resultSet)){
                               $pfName = print_r($row['pfName'], TRUE);
                            }
                        }

                        echo $pfName;

                        mysqli_close($con);
                        ?></p>
                    </div>

                    <div class="accountTxt2">
                        <p>Phone Number : +<?php

                        include('connectDB.php');
                        $id = $_COOKIE['id'];

                        $qry = "SELECT phoneNr FROM `users` WHERE id='$id'";
                        $resultSet = mysqli_query($con,$qry);

                        if (mysqli_num_rows($resultSet) > 0) {
                          while($row = mysqli_fetch_assoc($resultSet)){
                               $phoneNr = print_r($row['phoneNr'], TRUE);
                            }
                        }

                        echo $phoneNr;

                        mysqli_close($con);
                        ?></p>
                    </div>

                    <div class="accountTxt2">
                        <p>Country : <?php

                        include('connectDB.php');
                        $id = $_COOKIE['id'];

                        $qry = "SELECT country FROM `users` WHERE id='$id'";
                        $resultSet = mysqli_query($con,$qry);

                        if (mysqli_num_rows($resultSet) > 0) {
                          while($row = mysqli_fetch_assoc($resultSet)){
                               $country = print_r($row['country'], TRUE);
                            }
                        }

                        echo $country;

                        mysqli_close($con);
                        ?></p>
                    </div>

                    <div class="accountTxt2">
                        <p>City : <?php

                        include('connectDB.php');
                        $id = $_COOKIE['id'];

                        $qry = "SELECT city FROM `users` WHERE id='$id'";
                        $resultSet = mysqli_query($con,$qry);

                        if (mysqli_num_rows($resultSet) > 0) {
                          while($row = mysqli_fetch_assoc($resultSet)){
                               $city = print_r($row['city'], TRUE);
                            }
                        }

                        echo $city;

                        mysqli_close($con);
                        ?></p>
                    </div>

    </div>
</div>


</body>
</html>
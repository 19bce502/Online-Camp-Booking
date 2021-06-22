<nav id="navigation" class="navigation-sidebar bg-primary">
    <div class="navigation-header">
        <a href="index.php"><span class="logo">Admin</span></a>
        <!--<img src="logo.png" alt="logo" class="brand" height="50">-->
    </div>
    <?php
        $u_id=$_SESSION['u_id'];
        include 'conn.php';
        $q=mysql_query("select * from login");
        $row=mysql_fetch_row($q)
    ?>
    <!--Navigation Profile area-->
    <div class="navigation-profile">
        <img class="profile-img rounded-circle" src="assets/images/<?php echo $row[2];?>">
        <h4 class="name"><?php echo $row[1];?></h4>

    
        <!--logged user hover menu-->
     <!--   <div class="logged-user-menu bg-white">
            <div class="avatar-info">
                <img class="profile-img rounded-circle" src="assets/images/1.jpg" alt="profile image">
                <h4 class="name">Meera</h4>
                <span class="designation">UI/UX EXPERT</span>
            </div>

            <ul class="list-unstyled">
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-ios-email-outline"></i>
                        <span>Emails</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="ion-ios-person-outline"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="user_change-password.php">
                        <i class="ion-ios-locked-outline"></i>
                        <span>Change Password</span>
                    </a>
                </li>
            </ul> 
        </div> -->
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">
            <li>
                <a href="book.php" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Booked Camps</span>
                </a>
                
            </li>
             <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Camps</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="Add_camps.php" class="active">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="Camps.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="reviews.php" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Reviews</span>
                </a>
                <!--Submenu-->
                <!--<ul class="sub-menu">
                    <li>
                        <a href="reviews.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
                </ul>-->
            </li>
             <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Dates</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">

                    <li>
                        <a href="Add_dates.php" class="active">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="dates.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Gallery</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="Add_gallery.php" class="active">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="Gallery.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Login</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu">
                    <li>
                        <a href="Add_admin.php" class="active">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="LOGIN1.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Packages</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="Add_pkg.php" class="active">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="Package.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
            
                </ul>
                <li>
                <a href="User.php" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">User</span>
                </a>
                <!--Submenu-->
            </li>
            <li>
                <a href="javascript:void(0);" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Slider</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="Add_slider.php" class="active">
                            <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                            <span class="title">Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="Slider.php">
                            <span class="icon-thumbnail"><i class="dripicons-list"></i></span>
                            <span class="title">Action</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="Team.php" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Team</span>
                </a>
                
            </li>
                <li>
                <a href="Bill.php" class="have-submenu active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Bill_info</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
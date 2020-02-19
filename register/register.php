<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>ลงทะเบียนผู้ใช้</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-20 p-b-20 font-poppins">
        <div class="wrapper wrapper--w680">



            <!-- <img src="images/image-1.png" class="" width="10%" alt="Image"> -->



            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" style="text-align:center;">
                    <img src="https://image.flaticon.com/icons/svg/1597/1597110.svg" width="10%">
                    ลงทะเบียนผู้ใช้ระบบ ยืม-คืน  <img src="https://image.flaticon.com/icons/svg/1651/1651586.svg" width="10%"></i></h2>

                    <form method="POST" action="add_register.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">รหัสนักศึกษา / รหัสอาจารย์</label>
                                    <input class="input--style-4" type="text" name="user_id" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">รหัสผ่าน</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ชื่อ-นามสกุล</label>
                                    <input class="input--style-4" type="text" name="fullname" required>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ชั้นปีที่</label>
                                    <div class="p-t-10">
                                        <label class="radio-container">1
                                            <input type="radio" checked="checked" name="col_year" value="1" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">2
                                            <input type="radio" name="col_year" value="2" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">3
                                            <input type="radio" name="col_year" value="3" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">4
                                            <input type="radio" name="col_year" value="4" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">5
                                            <input type="radio" name="col_year" value="5" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">6
                                            <input type="radio" name="col_year" value="6" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">อีเมล์</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">เบอร์โทรศัพท์</label>
                                    <input class="input--style-4" type="text" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                        <div class="col-2">
                        <div class="input-group">
                            <label class="label">เลือกสาขา</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="department" id="department" required>
                                    <option value="" disabled="disabled" selected="selected">กรุณาเลือก...</option>
                                    <option value=1>วิทยาการคอมพิวเตอร์</option>
                                    <option value=2>เทคโนยีสารสนเทศ</option>
                                    <option value=3>ภูมิศาสตร์สารสนเทศ</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
</div>
<div class="col-2">
                        <div class="input-group">
                            <label class="label">เลือกบทบาท</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="role" id="role" required>
                                    <option value="" disabled="disabled" selected="selected">กรุณาเลือก..</option>
                                    <option value="personnel">บุคลากร / อาจารย์</option>
                                    <option value="student">นักศึกษา</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="p-t-10" style="display: flex; justify-content: center; align-items: center;">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                        <div class="p-t-10" style="display: flex; justify-content: center; align-items: center;">
                        <!-- <button onclick="location.href='../index.php'">Back to login</button> -->
                        <a href="../index.php">Back to login</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

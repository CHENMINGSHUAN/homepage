<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
            transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        }

        .modal_c {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 1rem 1.5rem;
            width: 24rem;
            border-radius: 0.5rem;
        }

        .button_c {
            float: right;
            width: 1.5rem;
            line-height: 1.5rem;
            text-align: center;
            cursor: pointer;
            border-radius: 0.25rem;

        }

        .button_c:hover {
            background-color: darkgray;
        }

        .show-modal {
            opacity: 1;
            visibility: visible;
            transform: scale(1.0);
            transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
        }

        .con {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input {
            margin-bottom: 10px;
        }

        #login {
            margin-top: 15px;
        }

        .a a {
            text-decoration: none;
            background-color: coral;
            padding: 15px;
            cursor: pointer;
            border-radius: 0.25rem;
            color: cornsilk;
            opacity: 0.8;
            font-size: 18px;
            margin-top: 15px;
        }

        .a {
            margin-top: 15px;
        }

        .fukuoka {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 24px;

        }

        li {
            list-style: none;
        }

        .select ul li {
            display: inline-block;
            font-size: 22px;
            border-left: lightslategrey, 1px, solid;
            padding-right: 30px;
        }

        .select a {
            text-decoration: none;
        }

        .select a:hover {
            opacity: 0.6;
        }

        header {
            justify-content: flex-end;
            display: flex;

        }

        .trigger {
            width: 80px;
            height: 30px;
            background-color: dimgray;
            color: floralwhite;
            border-radius: 0.25rem;
            cursor: pointer;
            opacity: 0.6;
            margin-right: 10px;
            font-size: 16px;
        }

        .dropbtn {


            padding: 8px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            /* visibility: hidden; */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>

</head>

<body>
    <header>

        <button class="trigger">log in</button>
        <div class="modal">
            <div class="modal_c">
                <span class="button_c">X</span>
                <div class="con">

                    <form action="login.create.php" method="POST">
                        <h1 class="title">log In</h1>
                        <label for="email2">Username</label><br>
                        <input type="name" id="username" name="username" /><br>
                        <label for="pass">Password</label><br>
                        <input type="password" id="password" name="password" /><br>

                        <div id="login">
                            <input type="submit" name="submit" value="login">
                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="member">

            <div class="dropdown">
                <button class="dropbtn"> Member Area</button>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="member.read.php">Settings</a>
                    <form action="logout.create.php" method="post">
                        <a href="../07_24_chinminsen/logout.create.php"  >Log out</a>
                    </form>
                </div>
            </div>


    </header>

    <div class="fukuoka">
        <h1>FUKUOKA Guide Book</h1>

        <div class="select">
            <ul>
                <li><a href="">Fukuoka</a> </li>
                <li><a href="">News</a> </li>
                <li><a href="">Local</a></li>
                <li><a href="">Information</a></li>
                <li><a href="">The Guide Book</a></li>
            </ul>
        </div>
        <div class="fukuoka">
            <div>
                <ul class="slide">
                    <li><img src="../07_24_chinminsen/img/20191011_164711.jpg" width="650px" height="420px"></li>


                </ul>
    </div>

            <div class="a">
                <a href="register.input.php">Start to write your Guide Book</a>
            </div>
        </div>
    </div>
    <footer>
        <p></p>
    </footer>




    <script>
        var modal = document.querySelector(".modal");
        var trigger = document.querySelector(".trigger");
        var button_c = document.querySelector(".button_c");

        function toggleModal() {
            modal.classList.toggle("show-modal");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }

        trigger.addEventListener("click", toggleModal);
        button_c.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);



        // $(function() {
        //     $('.slide li').hide();
        //     $('.slide li:first-child').show();
        //     setInterval(function() {
        //         $('.slide li:first-child').fadeOut(2000).next('li').fadeIn(2000).end().appendTo('.slide');
        //     }, 5000);
        // });
    </script>
</body>

</html>
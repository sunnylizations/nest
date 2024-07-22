<!DOCTYPE HTML>
<html>

<head>
    <style>
        .loader {
            color: black;
            font-family: Consolas, Menlo, Monaco, monospace;
            font-weight: bolder;
            font-size: 10vh;
            opacity: 0.8;
        }

        .loader span {
            animation: pulse 0.3s alternate infinite ease-in;

            &:nth-child(odd) {
                animation-delay: 0.9s;
            }
        }


        @keyframes pulse {
            to {
                transform: scale(0.7);
                opacity: 0.5;
            }
        }

        .div {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(30deg,
                    #000000,
                    #0e0e0e,
                    #181818,
                    #202020,
                    #292929,
                    #313131,
                    #3b3b3b,
                    #444444,
                    #4d4d4d,
                    #575757,
                    #616161,
                    #6b6b6b);
        }

        .div>ul {
            position: relative;
            left: 70px;
            list-style: none;
            padding: 20px 0px;
            margin: 0;
            border-left: 60px solid MediumSpringGreen;
            padding-left: 40px;
            width: 500px;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px -3px 0px inset,
                rgba(0, 0, 0, 0.3) 0px 3px 0px inset;
        }

        .div>ul>li {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
            height: 50px;
            color: white;
            text-transform: uppercase;
        }

        .div>ul>li:nth-child(2) {
            --itemcolor: red;
        }

        .div>ul>li:nth-child(4) {
            --itemcolor: orange;
        }

        .div>ul>li:nth-child(6) {
            --itemcolor: yellow;
        }

        .div>ul>li:nth-child(8) {
            --itemcolor: lawngreen;
        }

        .div>ul>li:nth-child(10) {
            --itemcolor: dodgerblue;
        }

        .div>ul>li:nth-child(12) {
            --itemcolor: violet;
        }

        .div>ul>li::before {
            content: "";
            position: absolute;
            left: -75px;
            width: 60px;
            height: 60px;
            border-radius: 60px;
            background: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 5px;
            border-style: double dotted solid dashed;
            font-weight: 600;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .div>ul>li::after {
            color: var(--itemcolor);
            position: absolute;
            left: -75px;
            width: 60px;
            height: 60px;
            background: transparent;
            content: "#1";
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .div>ul>li:nth-child(2)::before {
            border-color: var(--itemcolor);
            color: var(--itemcolor);
        }

        .div>ul>li:nth-child(4)::before {
            border-color: var(--itemcolor);
            color: var(--itemcolor);
        }

        .div>ul>li:nth-child(4)::after {
            content: "#2";
            color: var(--itemcolor);
        }

        .div>ul>li:nth-child(6)::before {
            border-color: var(--itemcolor);
        }

        .div>ul>li:nth-child(6)::after {
            content: "#3";
            color: var(--itemcolor);
        }

        .div>ul>li:nth-child(8)::before {
            border-color: var(--itemcolor);
        }

        .div>ul>li:nth-child(8)::after {
            content: "#4";
            color: var(--itemcolor);
        }

        .div>ul>li:nth-child(10)::before {
            border-color: var(--itemcolor);
        }

        .div>ul>li:nth-child(10)::after {
            content: "#5";
            color: var(--itemcolor);
        }

        .div>ul>li:nth-child(12)::before {
            border-color: var(--itemcolor);
        }

        .div>ul>li:nth-child(12)::after {
            content: "#6";
            color: var(--itemcolor);
        }

        .div>ul>li:hover::before {
            background: var(--itemcolor);
            border-color: black;
            animation: bulletspin 5s linear infinite;
            animation-fill-mode: forwards;
        }

        @keyframes bulletspin {
            0% {
                transform: rotateZ(0deg);
            }

            100% {
                transform: rotateZ(360deg);
            }
        }

        .div>ul>li:hover::after {
            color: white;
        }

        .div>ul>li:nth-child(4):hover::after,
        .div>ul>li:nth-child(6):hover::after,
        .div>ul>li:nth-child(8):hover::after {
            color: black;
        }

        .div>ul>li>p {
            position: relative;
            font-size: 12pt;
            width: auto;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 0;
            overflow: hidden;
            white-space: nowrap;
            transition: all 0.1s ease-in-out;
        }

        .div>ul>li>p::after {
            position: absolute;
            background: var(--itemcolor);
            content: "";
            bottom: 10px;
            left: -100%;
            width: 100%;
            height: 3px;
            transition: all 0.2s ease-in-out;
        }

        .div>ul>li:hover>p::after {
            left: 0;
            transition: all 0.2s ease-in-out;
        }

        .div>ul>li:active>p {
            transform: scale(0.95);
        }

        .div>ul>input {
            position: absolute;
            display: none;
            z-index: 3;
        }

        .div>ul>li>label {
            position: absolute;
            width: 120%;
            height: 100%;
            right: 0;
            z-index: 4;
        }

        .div>ul>li>label::before {
            position: absolute;
            content: "Quinoa irony vape, mixtape viral mumblecore readymade street art pork belly salvia yuccie paleo butcher selfies.";
            top: -70px;
            left: -100%;
            width: 250px;
            min-height: 200px;
            padding: 30px 20px;
            background: var(--itemcolor);
            visibility: hidden;
            opacity: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 11pt;
            color: white;
            text-align: center;
            text-transform: none;
            line-height: 16pt;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px -3px 0px inset;
            transition: all 0.3s ease-in-out;
        }

        .div>ul>li:nth-child(2)>label::before {
            content: "NEST Site Settings Can do changes your site logo, email, mobile, facebook, instagram, twitter,linkedin, address and page title.";
            top: 0;
        }

        .div>ul>li:nth-child(4)>label::before {
            content: "NEST slider settings have you can change slider image, button link, heading ,paragraph, description and also add and delete sliders and search images. ";
            top: -50px;
        }

        .div>ul>li:nth-child(6)>label::before {
            content: "NEST gallery settings have you can change gallery image, heading, description, and add or  delete gallery images and show home and check popular images and search images .";
        }

        .div>ul>li:nth-child(4)>label::before,
        .div>ul>li:nth-child(6)>label::before,
        .div>ul>li:nth-child(8)>label::before {
            color: black;
        }

        .div>ul>li:nth-child(8)>label::before {
            content: "NEST courses settings have you can change course image, heading, description, and add or delete course images and show home and check popular images and search images add new course delete exixting course.";

        }

        .div>ul>li:nth-child(10)>label::before {
            top: -120px;
            content: "NEST blogs settings have you can change blog image, heading, details, description, and add or delete blogs images and show home and check popular images and search images add new blogs delete exixting blogs!";

        }

        .div>ul>li:nth-child(12)>label::before {
            top: unset;
            bottom: 0;
            content: "NEST testimonials settings have you can change testimonials image, heading, description, and add or delete testimonials images and search images add new testimonials delete exixting course.";

        }

        .div>ul>li>label::after {
            position: absolute;
            top: 20%;
            left: -20%;
            content: "";
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 30px solid var(--itemcolor);
            visibility: hidden;
            opacity: 0;
            transform: scale(0);
        }

        div>ul>li>label:hover {
            cursor: pointer;
        }

        .div>ul>input:checked+li>label::before,
        .div>ul>input:checked+li>label::after {
            visibility: visible;
            opacity: 1;
            transition: all 0.3s ease-in-out;
        }

        .div>ul>input:checked+li>label::before {
            left: -87%;
        }

        .div>ul>input:checked+li>label::after {
            left: -25%;
            transform: scale(1);
        }

        .div>ul>input:checked+li>p {
            color: var(--itemcolor);
            font-weight: 700;
            font-size: 14pt;
            transition: all 0.1s ease-in-out;
        }

        /* Make Responsive */

        @media (max-width: 990px) {
            .card-body {
                width: 100%;
                height: 100%;
                overflow-y: auto;
            }

            .div {
                min-height: 100vh;
                padding: 20px 0px;
            }

            .div>ul {
                left: 20px;
                align-self: flex-start;
            }

            .div>ul>li>label::before {
                width: 300px;
                left: 100%;
                top: 100% !important;
            }

            .div>ul>li>label::after {
                left: 0;
                top: 230%;
            }

            .div>ul>input:checked+li {
                margin-bottom: 220px;
            }

            .div>ul>input:checked+li>label::before {
                left: 21%;
            }

            .div>ul>input:checked+li>label::after {
                left: 12%;
                top: 230%;
            }
        }

        @media (max-width: 630px) {
            div>ul>li {
                height: 70px;
            }

            .div>ul>li>p {
                font-size: 11pt;
            }

            .div>ul>input:checked+li>p {
                font-size: 12pt;
            }

            .div>ul>li>label::before {
                padding: 20px;
                left: 10% !important;
            }

            .div>ul>li>label::after {
                left: 0 !important;
                filter: drop-shadow(1px 1px 2px black);
            }
        }

        @media (max-width: 550px) {
            .div>ul {
                width: 320px;
            }

            .div>ul>li {
                white-space: normal !important;
            }

            .div>ul>li>p {
                white-space: normal !important;
                line-height: 11pt;
            }

            .div>ul>li>label::before {
                padding: 20px;
                left: -10% !important;
            }

            .div>ul>li>label::after {
                left: -16% !important;
            }
        }

        @media (max-width: 375px) {
            .div>ul {
                width: 290px;
            }

            .div>ul>li>label::before {
                width: 230px;
                min-height: 260px;
            }

            .div>ul>input:checked+li {
                margin-bottom: 270px;
            }
        }
    </style>
    <title>ADMIN PANEL</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>
    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Dashboard </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                Welcome to NEST Admin Pannel
            </div>


            <div class="div p-50 mt-20" style="margin-top: 30px;">

                <ul>
                    <input type="radio" id="list-1" name="list" value="list-1">
                    <li>
                        <label for="list-1"></label>
                        <p>NEST Site-Settings</p>
                    </li>
                    <input type="radio" id="list-2" name="list" value="list-1">
                    <li>
                        <label for="list-2"></label>
                        <p>NEST Sider Settings</p>
                    </li>
                    <input type="radio" id="list-3" name="list" value="list-1" checked>
                    <li>
                        <label for="list-3"></label>
                        <p>NEST Category</p>
                    </li>
                    <input type="radio" id="list-4" name="list" value="list-1">
                    <li>
                        <label for="list-4"></label>
                        <p>NEST Products</p>
                    </li>
                    <input type="radio" id="list-5" name="list" value="list-1">
                    <li>
                        <label for="list-5"></label>
                        <p>NEST Top, trending</p>
                    </li>
                    <input type="radio" id="list-6" name="list" value="list-1">
                    <li>
                        <label for="list-6"></label>
                        <p>NEST Orders</p>
                    </li>
                </ul>

            </div>



        </div>
    </div>

    <div class="content-top">

        <div class="col-md-4 "> </div>

        <div class="clearfix"> </div>

    </div>

    <?php $this->load->view("include/admin_footer"); ?>

</body>

</html>

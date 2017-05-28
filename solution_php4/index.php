<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 28.05.2017
 * Time: 18:02
 */
?>

<!DOCTYPE html>

    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device width,initial-scale=1.0">
<!--            <link rel="stylesheet" href="css/style.css">            -->
            <title>task4_solution</title>
        </head>

        <body>

            <style>
                .calculation_cont{
                    display:flex;
                    width:400px;
                }
                .action_btn_block{
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                    width:400px;
                    margin-top: 20px;

                }
                .action_item{
                    width: 50px;
                    height: 50px;
                    font-size: 20px;
                    font-weight:800;
                    border: 1px solid #000;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 5px 0 5px;
                    cursor: pointer;

                }
                .action_item:hover{
                    color:yellow;
                    background: #666;

                }

            </style>

            <form class = "calculation_cont" action="index.php" method = "post">
                <input id = "first_num" type="number" name="first_num">
                <p style="width:20px;margin: 0px;" id = "action_display"></p>
                <input style = "float:left" id = "second_num" type="number" name="second_num">
                <input style = "display:none" id = "action_field" type="text" name="action_field">
                <input type="submit" value="=">
            </form>
            <div class="action_btn_block">
                <div class="action_item summa"><p>+</p></div>
                <div class=action_item raznost"><p>-</p></div>
                <div class="action_item mult"><p>*</p></div>
                <div class="action_item del"><p>/</p></div>
            </div>
     	<script type="text/javascript" src = "./jquery-3.1.0.min.js"></script>
      	<script type="text/javascript" src='./script1.js'></script>
        </body>


    </html>
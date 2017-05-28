<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 28.05.2017
 * Time: 18:02
 */
function get_data(){
    if (isset($_POST['first_num']) && isset($_POST['second_num']) && isset($_POST['action_field'])) {

    $first = (int)$_POST['first_num'];
    $second = (int)$_POST['second_num'];
    $action = $_POST['action_field'];
    $result = [ 'res' => 0, 'error' => '' ];

        if ($action === '/' || $action === '*' || $action === '-' || $action === '+') {
            $result['first'] = $first;
            $result['second'] = $second;
            $result['action'] = $action;
            get_result($result);
            return 1;
        } else {
            $result['error'] = 'Введено неверное действие';
            draw_error($result);
            return 0;
        }
    }
}
function draw_error($result){
    echo $result['error'];
}
function draw_result($result){
    $_POST['result'] = $result['res'];
};

function get_result(array $result)
{
            switch ($result['action']) {
                case '*':
                    $result['res'] = $result['first'] * $result['second'];
                    break;
                case '/':
                    if ($result['second']) {
                        $result['res'] = $result['first'] / $result['second'];
                    } else {
                        $result['error'] = 'Деление на ноль!';
                        draw_error($result);
                    }
                    break;
                case '-':
                    $result['res'] = $result['first'] - $result['second'];
                    break;
                case '+':
                    $result['res'] = $result['first'] + $result['second'];
                    break;
                default :
                    $result['error'] = 'Введено неверное действие!';
                    draw_error($result);
            }
    if($result['error'] === ''){
        draw_result($result);
        return 1;
    }
}
get_data();


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
                #action_display{
                    width:30px;
                    height: 30px;
                    display: flex;
                    align-items:center;
                    justify-content: center;
                }
                input{
                    margin-right:5px;
                }
                #action_field{
                    font-size: 16px;
                    width:9px;
                    padding: 0 5px 0 5px
                }
                .calc_result{
                    width:20px;
                    display: flex;
                    align-items:center;
                    justify-content: center;
                    height: 2px;
                }

            </style>

            <form class = "calculation_cont" action="index.php" method = "post">
                <input required id = "first_num" type="number" name="first_num">
                <input required id = "action_field" type="text" name="action_field">
                <input required id = "second_num" type="number" name="second_num">

                <input type="submit" value="=">
               <p class="calc_result"><?php if(isset($_POST['result'])){echo $_POST['result'];}; ?></p>
                <input type="hidden" name="send_form" value="send">
            </form>
            <div class="action_btn_block">
                <div class="action_item summa"><p>+</p></div>
                <div class="action_item raznost"><p>-</p></div>
                <div class="action_item mult"><p>*</p></div>
                <div class="action_item del"><p>/</p></div>
            </div>
     	<script type="text/javascript" src = "./jquery-3.1.0.min.js"></script>
      	<script type="text/javascript" src='./script1.js'></script>
        </body>


    </html>
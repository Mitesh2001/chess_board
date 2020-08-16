<?php
$testVar = 1 ;
$charVar = range('A', 'Z');
function changeColor()
{
    global $testVar ;
    if ($testVar%2 == 0) {
        return true ;
    } else {
        return false ;
    }
}
function printWhiteBox()
{
    echo '<td><div class="white-box"></div></td>';
}
function printBlackBox()
{
    echo '<td><div class="dark-box"></div></td>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chess Board</title>
        <style>
                .text-center {
                    text-align: center;
                }
                .white-box {
                        height: 80px;
                        width: 80px;
                        background-color: while;
                        border: 1px blue solid;
                }
                .dark-box {
                        height: 80px;
                        width: 80px;
                        background-color:gray;
                        border: 1px blue solid;
                }
        </style>
</head>
<body>
    <center>
        <table>
                <tr>
                    <td></td>
                    <?php
                        for ($num=1; $num < 9; $num++) {
                            echo '<td class="text-center">'.$num.'</td>';
                        }
                    ?>
                </tr>
            <?php for ($i=0; $i < 8; $i++) { ?>
                <tr>
                    <?php
                        echo '<td class="text-center">'.$charVar[$i].'</td>';
                        for ($j=0; $j < 4; $j++) {
                            if (changeColor()) {
                                printBlackBox();
                                printWhiteBox();
                            } else {
                                printWhiteBox();
                                printBlackBox();
                            }
                        } ?>
                </tr>
            <?php
                $testVar ++ ;
                    }
            ?>
        </table>
    </center>
</body>
</html>
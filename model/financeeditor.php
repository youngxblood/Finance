<?php
error_reporting( E_ALL );
require_once( $_SERVER[ 'DOCUMENT_ROOT' ]."/inc/connect.php" );

if ( isset( $_POST['finance'] ) )
{
    $subType = $_POST['radio'];
    echo $subType;
    $tag = $_POST['tag'];
    echo $tag;
    $amount = $_POST['amount'];
    echo $amount;
    $id = $_COOKIE['loggedin'];
    echo $id;
    $sql = "INSERT INTO transactions (user_id, amount, tag, type) VALUES ($id, $amount, '$tag', '$subType');";
    // INSERT INTO transactions (user_id, amount, tag, type) VALUES (1, 300, 'groceries', 'income');

    $result = mysqli_query($conn, $sql);
    echo $result;
    // echo $sqlupdate1 = "UPDATE table SET commodity_quantity=$qty WHERE user='".$rows['user']."' "


//"SELECT * FROM transactions
// JOIN users ON user.id = transaction.user_id"


} else
{
    header('Location: http://doshdata.com/view/index.php');
}

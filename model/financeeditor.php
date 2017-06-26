<?php
require_once( $_SERVER[ 'DOCUMENT_ROOT' ]."/inc/connect.php" );

if ( isset( $_POST['finance'] ) )
{
    // switch ( $_POST['radio'] ) {
    //     case 'income':
    //         echo "Income.";
    //         $subType = mysqli_real_escape_string($conn, $_POST['radio']);
    //         break;

    //     case 'expense':
    //         echo "Expense.";
    //         $subType = mysqli_real_escape_string($conn, $_POST['radio']);
    //         break;
    // }

    $subType = $_POST['radio'];
    echo $subType;
    $tags = $_POST['tag'];
    echo $tags;
    $amount = $_POST['amount'];
    echo $amount;

} else
{
    header('Location: http://doshdata.com/view/index.php');
}

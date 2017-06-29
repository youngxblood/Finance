<?php
$pagetitle = 'Login';
include( $_SERVER[ 'DOCUMENT_ROOT' ]."/view/layout/header.php" );
?>

<?php

if ( !isset( $_COOKIE['loggedin'] ) )
{
    echo "<h2>Please log in to see edit your finances.</h2>";
} else {

?>

<div class="container">
    <h2>Submit any new expenses below:</h2><br>
    <form action="http://doshdata.com/model/financeeditor.php" method="post">

        <div class="radio">
            <h2 class="lead">Type of value: </h2>
            <label><input type="radio" name="radio" value="income" checked="checked">Income</label>
            <label><input type="radio" name="radio" value="expense">Expense</label>
        </div>

        <div class="radio">
            <h2 class="lead">Relevant tags: </h2>
            <label><input type="radio" name="tag" value="groceries" checked="checked">Groceries</label>
            <label><input type="radio" name="tag" value="restaurant">Restaurant</label>
            <label><input type="radio" name="tag" value="entertainment">Entertainment</label>
            <label><input type="radio" name="tag" value="bills">Monthly Bills</label>
            <label><input type="radio" name="tag" value="misc">Misc</label>
        </div>
        <div class="col-lg-6">
            <label>Amount</label><input class="form-control" name="amount" type="text" required><br>
            <input type="submit" name="finance" value="Submit">
        </div>

    </form>

</div>

<?php } ?>





<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ]."/view/layout/footer.php" );
?>

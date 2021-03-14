<?php 
    include_once 'includes/dbConnection.php ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Bank Management System</title>
    <link rel="stylesheet" href="./index.css">
    
<body>
    <div className="grid-container">
        <header class="header">
             <h1>Bank of Vizag</h1>
        </header>
        
        <main class = "main">
            <div class = "welcome_text">
                <h1>Welcome To Bank of Vizag !!! </h1><br>
                <h1>Now the Banking System has become Easier and Faster!!  </h1>
            </div>
            <div class="row">
                <div class="column">
                    <a href = "includes/users.php" name = "usersList_link"><img src="images/users2.jfif" alt="users" style="width:100%"><h2 style="text-align:center;">Users</h2></a>
                </div>
                <div class="column">
                    <a href = "transferMoney.php" name = "transfermoney"><img src="images/transfer.jfif" alt="money transfer" style="width:100%"><h2 style="text-align:center;">Transfer Money</h2></a></a>
                </div>
                <div class="column">
                    <a href = "transactionsList.php" name = "transfermoney"><img src="images/transaction2.jfif"alt="transaction list" style="width:55% ; padding-left : 10rem"><h2 style="text-align:center;">Transaction List</h2></a></a>
                </div>
            </div>
        </main>
        
    </div>
    </div>
</body>


</html>
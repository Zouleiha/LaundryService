<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../styles/customerStyles.css">
    <title> Customer </title>
</head>
<body>
    <header> 
        <h2> Your Page, Dear Customer </h2>
       <div class="center-text">
        <form class="form" action="CustList.html" method="post" >
        
            <input type="text" name="" placeholder="Name" id="username">
            <input type="id" name="" placeholder="ID" id="Id">
            <input type="email" name="" placeholder="Email" id="email">
            <input type="phone" name="" placeholder="Phone number" id="phone">
            <input type="address" name="" placeholder="Address" id="address">
            <input type="text" name="" placeholder="Date joinned" id="Date">
            <input type="submit" value="Go Back" onclick="validate()">                 
        </form>
       </div>
    </header>
    <script src="./../JS/main.js"></script>
</body>
</html>
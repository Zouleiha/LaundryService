<?php include('./../inc/customerHeader.php'); ?>

 <!DOCTYPE html>

 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Order Form</title>
     <link rel="stylesheet" href="./../styles/customerStyles.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 </head>
 <body>
   <input type="checkbox" id="toggle">
   <label for="toggle" class="show-btn">Click here to Order</label>
   <div class="wrapper">
     <label for="toggle">
     <i class="cancel-icon fas fa-times"></i>
     </label>
     <div class="icon"><i class="far fa-envelope"></i></div>
     <div class="content">
     </div>
 
     <form action="order.php" method="POST">
        <div class="field">
             <h4> 
               <label>
                 Clothing items: 
                 <a> <input list="Clothing items">
                  <datalist id="Clothing items">
                      <option value="Trouser"> Trouser</option>
                      <option value="Shirt"> Shirt </option>
                      <option value="Gown"> Gown </option>
                  </datalist>  
                </a>,   <br> <br>          
                          <input type="number" value="" placeholder="Enter the number of items">
                          <button id="Add" > + </button>  
                </label> 
              </h4>
       </div>
       
       <div class="field btn">
         <div class="layer"></div>
         <button type="submit" name="order">Place Order</button>
       </div>
     </form>
   <script src="main.js"> </script>
 </body>
 </html>
 
 
<?php include('./../inc/customerFooter.php'); ?>
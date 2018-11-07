<!DOCTYPE htm>
<?php
include 'connect.php';
$sql = "SELECT * FROM stock;";
$rows = $conn->query($sql);

?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scal=1.0">
        
        <!-- Own CSS style.css -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

       
       
        <title>
            Stock Products
            
        </title>
        
        
    </head>
    
    
    <body>
        

        
        <div class="rows">
        <div class="column">
            <img src="images/traderight logo.png" alt="trade_right logo"/>
         </div>
         
         <br>
         <br>
         <br>
         
         <div class="column">

             <a href="index.html"><i class="fas fa-home"style="float:right;"></a></i>  
             <a href="contact.html"><i class="fas fa-comment"style="float:right;"></a></i>  
             <a href="news.html"><i class="fas fa-newspaper"style="float:right;"></a></i>   
         </div>
   
         </div>
         
         
    <hr style="height:5px;border-top-color:rgb(231,83,0); border-bottom-color: rgb(231,83,0); position: relative; margin-left: 20px; margin-top: 20px;">
    
    
    
        
         
        
        <div id="heading">The Stocks </div>     

        
        
        
        
        <div class="container">
            
            <div class="row" style="marging-top 70px;">
                
                <br>
                <br>
                   <div class="col-md-12 col-md-offset-0">
                    <table class="table">
                        <button type="button" class="btn-btn-secondary" data-target="#myModal" data-toggle="modal">Search Stock</button>
                        &nbsp; &nbsp;
                        <button type="button" class="btn-btn-secondary" data-target="#myModal-2" data-toggle="modal">Search by price</button>
                        &nbsp; &nbsp;
                        <button type="button" class="btn-btn-secondary" data-target="#myModal-3" data-toggle="modal">Search by description</button>
                        <button type="button" class="btn-btn-default pull-right">Print</button>
                        <br>
                        <br>
                        <br>
                        <br>
                        

                        
<!-- Modal 1 -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search Stock Product</h4>
      </div>
      
      <div class="modal-body">
         <!-- How we send form data and where we want the data to go --> 
        
        <form method="post" action="name.php">
            <div class="form-group">
                <label for="stock-name"></label>
                <input type="text" name="stock-name" id="stock-name" required class="form-control"/>
            </div>
            <input type="submit" name="send" value="Click to Search" class="btn btn-success"/>
        </form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
 </div> 
  
  <!-- Modal 2-->
<div id="myModal-2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search Stock by price</h4>
      </div>
      
      <div class="modal-body">
         <!-- How we send form data and where we want th data to go --> 
        
        <form method="post" action="price.php">
            <div class="form-group">
                <label for="stock-price"> Stock price </label>
                <input type="text" name="stock-price" id="stock-price" required class="form-control"/>
            </div>
            <input type="submit" name="send" value="Click to Search" class="btn btn-success"/>
        </form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
                        

  <!-- Modal 3-->
<div id="myModal-3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search Stock by description</h4>
      </div>
      
      <div class="modal-body">
         <!-- How we send form data and where we want the data to go --> 
        
        <form method="post" action="description.php">
            <div class="form-group">
                <label for="stock-description"> Stock description </label>
                <input type="text" name="stock-description" id="stock-description" required class="form-control"/>
            </div>
            <input type="submit" name="send" value="Click to Search" class="btn btn-success"/>
        </form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
 </div>   
                        



 
                        
                        
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="text-align: right">Price per volume</th>
                                
                                
                        </tr>
                    </thead>
                        
                        <tbody>
                            
                            <?php while($row = $rows->fetch_assoc()): ?>
                             
                            
                            <tr>
                                <td class="col-md-3"><?php echo $row ["name"]; ?></td>
                                <td class="col-md-6"><?php echo $row ["description"]; ?></td>
                                <td class="col-md-3" style="text-align:right;"> <?php echo $row ["price"]; ?></td>
                            </tr>
                            
                           <?php endwhile; ?>

                            
                            
                        </tbody>
                  
           
               </table>
               
            </div>
   
       </div>
        
        
    </body>
    
    
    
</html>
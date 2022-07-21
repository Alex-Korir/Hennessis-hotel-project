<?php
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
else{
    $msg="";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookingDetails</title>
    <link rel="stylesheet" href="bookings.css">
</head>
<body>
    <section class="bookings" style="background-color: grey;">
        <div class="heading">
            <h2>Make Your Bookings Here</h2>
        </div> 
        
        <form action="bookingHandler.php" method="post">
        <p style="font-size: 20px; font-family: sans-serif; color: red; text-transform: uppercase; background-color: skyblue; text-align: center;"><?php echo $msg?></p>
            <div class="form-group">
                <input type="text" name="duration" id="duration" class="form-control input-sm" placeholder="Stay Period" required>
            </div>
            <div class="form-group">
                <input type="text" name="roomNO" id="roomNO" class="form-control input-sm" placeholder="NO of rooms" required>
            </div>
            <div class="form-group">
                <input type="text" name="NO_of_beds" id="beds" class="form-control input-sm" placeholder="No of beds" required>
            </div>
            <div class="form-group">
                <input type="text" name="city" id="city" class="form-control input-sm" placeholder="City.." required>
            </div>
            <div class="form-group">
                <input type="text" name="city" id="city" class="form-control input-sm" placeholder="No of persons per room" required>
            </div>
        
            <div class="form-gr" style="display:block; font-size: 15px; font-family: sans-serif; background-color: #cfd7df; border-radius: 4px; padding: 8px; margin: 6px; color: gray; border: 1px solid gray;">
                <p>Room Quality</p>
                <input type="radio" name="quality" value="VIP" id="move" class="form-control input-sm" required style="margin: 5px;">
                <label for="VIP">VIP</label><br>
                <input type="radio" name="quality" id="move" value="Regular" class="form-control input-sm" required style="margin: 5px;">
                <label for="Regular">Regular</label><br>
                <input type="radio" name="quality" id="move" value="Presidental Suits" class="form-control input-sm" required style="margin: 5px;">
                <label for="Presidential Suits">Presidental Suits</label>
            </div>
            <div class="form-gr" style="display:block; font-size: 15px; font-family: sans-serif; background-color: #cfd7df; border-radius: 4px; padding: 8px; margin: 6px; color: gray; border: 1px solid gray;">
                <p>Which type of room do you want?</p>           
                <input type="radio" name="roomType" value="Single room" id="move" class="form-control input-sm" required style="margin: 5px;">
                <label for="single">Single room</label><br>
                <input type="radio" name="roomType" id="move" value="Double room" class="form-control input-sm" required style="margin: 5px;">
                <label for="Double">Double room</label><br>
                <input type="radio" name="roomType" id="move" value="Triple room" class="form-control input-sm" required style="margin: 5px;">
                <label for="Tripple">Triple room</label><br>
                <input type="radio" name="roomType" id="move" value="Quad room" class="form-control input-sm" required style="margin: 5px;">
                <label for="Quad">Quad room</label>
            </div>

            
    
            <input type="submit" name="submit" value="Register" class="btn btn-info btn-block">
        </form>
    </section>
</body>
</html>
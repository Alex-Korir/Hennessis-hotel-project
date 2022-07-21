<?php include "includes/header.php";

if(isset($_SESSION['name'])){
    $urlt="bookingDetails.php";
}
else{
    $urlt="marv.php";
}


?>



        <div class="center-container">
            <p><span>HENNESSIS HOTEL</span></p>
            <h1>A Best Place to Enjoy Life</h1>
            <button type="submit" class="btn-book"><a href=<?php echo $urlt?>>Book Now</a></button>
        </div>
    </section>


    <script src="/js/projo.js"></script>
</body>
</html>
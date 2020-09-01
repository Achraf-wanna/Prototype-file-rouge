<script>
function myFunction() {
  var x = document.getElementById("bottom-nav");
  if (x.className === "bottom-nav") {
    x.className += " responsive";
  } else {
    x.className = "bottom-nav";
  }
}
</script>
    <div class="nav">
            <div class="bottom-nav" id="bottom-nav">
        <!-- logo  ------------------------------------------------------------->
        <img src="img/logo.png">
        <!-- list -------------------------------------------------------------->
        <ul id="u-l">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/gallery.php">About Us</a></li>
          <li><a href="/reservation.php">Reservation</a></li>
          <li><a href="/contact.php">Contact us</a></li>
          <li><a href="/basket.php">Basket</a></li>

        </ul>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

</div>
<?php
// ---------------- PHP LOGIC ----------------

// Jersey details with local images
$jerseys = array(
    array("team"=>"India", "price"=>1500, "img"=>"images/india.jpg"),
    array("team"=>"Brazil", "price"=>1800, "img"=>"images/Brazil.webp"),
    array("team"=>"Argentina", "price"=>2000, "img"=>"images/Argentina.webp"),
    array("team"=>"Germany", "price"=>1700, "img"=>"images/Germany.webp")
);

// Function to calculate discounted price
function finalPrice($price){
    if ($price > 1800) {
        return $price - 200;
    } else {
        return $price;
    }
}

// Handle buy request
$teamName = "";
$price = 0;
$category = "";

if (isset($_GET['team'])) {
    $teamName = $_GET['team'];
    $price = $_GET['price'];

    if ($price > 1800) {
        $category = "Premium Jersey";
    } else {
        $category = "Regular Jersey";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Elite Jersey Store</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background:#f0f2f5;
}
header{
    background:linear-gradient(to right,#000428,#004e92);
    color:white;
    padding:20px;
    text-align:center;
}
.container{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    padding:30px;
}
.card{
    background:white;
    width:250px;
    margin:15px;
    border-radius:12px;
    box-shadow:0 8px 16px rgba(0,0,0,0.2);
    transition:transform 0.3s;
}
.card:hover{
    transform:scale(1.05);
}
.card-body{
    padding:15px;
    text-align:center;
}
.card-body img{
    width:100%;
    height:250px; /* slightly taller for real jersey photos */
    object-fit:cover;
    border-radius:10px;
    margin-bottom:10px;
}
.price{
    font-size:18px;
    margin:10px 0;
}
.buy-btn{
    display:inline-block;
    background:#28a745;
    color:white;
    padding:10px 20px;
    border-radius:20px;
    text-decoration:none;
    font-weight:bold;
    cursor:pointer;
}
.buy-btn:hover{
    background:#218838;
}
.summary{
    background:white;
    width:50%;
    margin:20px auto;
    padding:20px;
    border-radius:10px;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
    text-align:center;
}
</style>

<script>
// JS event handling
document.addEventListener("DOMContentLoaded", function() {
    let buttons = document.querySelectorAll(".buy-btn");
    buttons.forEach(function(btn){
        btn.addEventListener("click", function(event){
            event.preventDefault();
            let team = this.dataset.team;
            let price = this.dataset.price;

            if (confirm("Do you want to buy " + team + " jersey?")) {
                let qty = prompt("Enter quantity:", 1);
                let total = qty * price;
                alert("Total Amount: ₹" + total);

                window.location.href = "?team=" + team + "&price=" + price;
            }
        });
    });
});
</script>

</head>

<body>
<header>
    <h1>⚽ Elite Jersey Store</h1>
    <p>Premium Football Jerseys</p>
</header>

<div class="container">

<?php
foreach ($jerseys as $j) {
    $fp = finalPrice($j['price']);
    echo "
    <div class='card'>
        <div class='card-body'>
            <img src='{$j['img']}' alt='{$j['team']} Jersey'>
            <h2>{$j['team']}</h2>
            <p class='price'>₹{$fp}</p>
            <a href='#' class='buy-btn' data-team='{$j['team']}' data-price='{$fp}'>Buy Now</a>
        </div>
    </div>";
}
?>

</div>

<?php
if ($teamName != "") {
    echo "
    <div class='summary'>
        <h2>🧾 Order Summary</h2>
        <p><b>Team:</b> $teamName</p>
        <p><b>Category:</b> $category</p>
        <p><b>Price:</b> ₹$price</p>
    </div>";
}
?>

</body>
</html>

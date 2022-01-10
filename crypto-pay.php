<?php

	require_once 'config.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<style>

			body{
				display: flex;
				flex-direction: row;
				text-align:  center;
				justify-content: center;
			}

			.body-container{
				width: 500px;
			}

			html{
				background-color: black;
				zoom: 160%;
			}

			.header{
				display:  flex;
				flex-direction: column;
				text-align:  center;
			}

			.ticket-select-container{
				width: 100%;
				display:  flex;
				flex-direction: row;
				justify-content: center;
				text-align: center;
			}

			.ticket-select-box{
				margin: 50px 0px 25px 0px;
			}

			.active{
  				background-color: #cc1616;
  				color:  white;
  				text-decoration: none;
  				padding: 15px;
  				position:  absolute; left: 0; top: 0;
			}

			.active:hover{
				color: blue;
			}
		</style>

	</head>
	<body>
		<!--<a class="active" href="index.php">Home</a>-->
		<div class='body-container'>
			<div class='header'>
				<h1 style='color: white;'>Minimum purchase per crypto transaction is 2 tickets, maximum is 10</h1>
				<h4 style='color: white;'>If you'd like to buy more, please do so on a seperate transaction</h4>
			</div>
			<div class='ticket-select-container'>
				<div style='width: 50%;'>
					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/e4a6dad3-1eb2-4e1d-bb61-4f52532cd8de">Buy 2 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/b415bcb4-cb0e-4189-b9c4-b0704d956aef">Buy 4 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/4a89b675-8ad4-488a-a42e-6ba92d7a7aee">Buy 6 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/4975e350-4977-40c1-8703-3e0657a39677">Buy 8 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto"  style='color: white;' href="https://commerce.coinbase.com/checkout/cc912520-1339-4046-bda5-faa2443a1c3c">Buy 10 Tickets</a>
					</div>
				</div>
				<div style='width: 50%;'>
					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/383b7b02-205d-49cb-8ea4-7b45d9acbdc0">Buy 3 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/87f4aa2b-b788-4b40-b586-d27cb0929ef5">Buy 5 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/0b5efc9a-0acb-427d-b71b-79c75a00fffb">Buy 7 Tickets</a>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/5b29852a-f4bf-491b-a39c-4ab2f149773b">Buy 9 Tickets</a>
					</div>

					<div style='position: absolute; display: none;'>
						<a class="buy-with-crypto" style='color: white;' href="https://commerce.coinbase.com/checkout/5b29852a-f4bf-491b-a39c-4ab2f149773b">Buy 9 Tickets</a>
						<script src="https://commerce.coinbase.com/v1/checkout.js?version=201807"></script>
					</div>

					<div class='ticket-select-box'>
						<a class="buy-with-crypto" style='color: white;' href="purchase.php" onclick="">CANCEL</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
function supplierSteel()
{
	let quantity = parseInt(document.getElementById("quantity").value,10);
	
	if(quantity > 0)
	{
		let price1 = (quantity * 5).toFixed(2);
		let price2 = (quantity * 5.50).toFixed(2);
		let price3 = (quantity * 6).toFixed(2);
		if(quantity >= 16 && quantity <= 23)
		{
			let priceDiscount1 = price1;
			let priceDiscount2 = price2 - (price2 * 0.05);
			let priceDiscount3 = price3 - (price3 * 0.10);
			document.getElementById('price').innerHTML = "Best price: " + priceDiscount3.toFixed(2) + "€";
			document.getElementById('results').innerHTML="<h4><ul><li><b>Supplier 1</b> is not prompted because it does not have enough stock quantity available<br></li><br><li><b>Supplier 2</b> is not prompted because it does not have enough stock quantity available</li><br><li><b>Supplier 3</b> can fulfill the request for " + priceDiscount3.toFixed(2) +"€ this is the cheapest one so it should be highlighted.</ul></h4>";
		}
		else
		{
			if(quantity >= 10 && quantity <= 15)
			{
				let priceDiscount1 = price1;
				let priceDiscount2 = price2 - (price2 * 0.05);
				let priceDiscount3 = price3 - (price3 * 0.10);
				document.getElementById('price').innerHTML = "Best price: " + priceDiscount2.toFixed(2) + "€";
				document.getElementById('results').innerHTML="<h4><ul><li><b>Supplier 1</b> is not prompted because it does not have enough stock quantity available<br></li><br><li><b>Supplier 2</b> can fulfill the request for " + priceDiscount2.toFixed(2) + "€ this is the cheapest one so it should be highlighted.</li><br><li><b>Supplier 3</b> can fulfill the request for " + priceDiscount3.toFixed(2) +"€ Fast delivery.</ul></h4>";
			}
			else
			{
				if(quantity == 9)
				{
					let priceDiscount1 = price1;
					let priceDiscount2 = price2;
					let priceDiscount3 = price3
					document.getElementById('price').innerHTML = "Best price: " + priceDiscount2+ "€";
					document.getElementById('results').innerHTML="<h4><ul><li><b>Supplier 1</b> is not prompted because it does not have enough stock quantity available<br></li><br><li><b>Supplier 2</b> can fulfill the request for " + priceDiscount2 + "€ this is the cheapest one so it should be highlighted </li><br><li><b>Supplier 3</b> can fulfill the request for " + priceDiscount3 +"€. Fast delivery.</ul></h4>";
				}
				else
				{
					if(quantity <= 8)
					{
						let priceDiscount1 = price1;
						let priceDiscount2 = price2;
						let priceDiscount3 = price3;
						document.getElementById('price').innerHTML = "Best price: " + priceDiscount1 + "€";
						document.getElementById('results').innerHTML="<h4><ul><li><b>Supplier 1</b> can fulfill the request for " + priceDiscount1 + "€. This is the cheapest one so it should be highlighted.<br></li><br><li><b>Supplier 2</b> can fulfill the request for " + priceDiscount2 + "€. </li><br><li><b>Supplier 3</b> can fulfill the request for " + priceDiscount3 +"€. Fast delivery.</ul></h4>";
					}
					else
					{
						document.getElementById('results').innerHTML="<h4>Sorry, quantity at moment not available.</h4>";
					}
				}
			}
		}
	}
	else
	{
		document.getElementById('results').innerHTML="<h4>Please, enter a quantity greater than 0.</h4>";
	}
}
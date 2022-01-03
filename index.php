<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
<title>Collate all data from input fields</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

</head>

		<div>
        	<div >
            	<label class="form-label">ID</label><input name="id" id="id" class="form-input" value = "1256" readonly>
            </div>

            <div >
            <label class="form-label">Name</label><input type="text" name="name" id="name" class="myData" value = "Your Name 1st" readonly>
            </div>
            
            <div >
            <label class="form-label">Name2</label><input type="text" name="name2" id="name2" class="myData" value = "Your Name  2nd" readonly>
            </div>
            <div >
            <label class="form-label">Name3</label><input type="text" name="name3" id="name3" class="myData" value = "Your Name  3rd" readonly>
            </div>
            
            <div >
            <label class="form-label">Strapline</label><input type="text" name="strapline" id="strapline" class="myData" value = "Strapline here" readonly>
            </div>

            <div >
            <label class="form-label">Address</label><input type="text" name="add1" id="add1" class="myData" value = "Address - Street"readonly >
            </div>

            <div >
            <label class="form-label">Town</label><input type="text" name="town" id="town" class="myData" value = "Address - Town"readonly >            
            </div>

            <div >
            <label class="form-label">Town</label><input type="text" name="county" id="county" class="myData" value = "Address - County" readonly>            
			</div>
            <div >
            <label class="form-label">Postcode</label><input type="text" name="postcode" id="postcode" class="myData" value = "Address - Postcode" readonly>            
			</div>
            <div >
            <label class="form-label">Telephone</label><input type="text" name="telephone" id="telephone" class="myData" value = "Your Telephone" readonly>            
			</div>
            <div >
            <label class="form-label">Email</label><input name="email" id="email" class="myData" type="email"value = "your@email.address" readonly>            
			</div>
			<div>
        	<button  id="showData"> Show data </button> 
        	</div>
		</div>


		<div id="showData"></div>



<body>
</body>
</html>
<script>
	myInputs = new Array();

	$(".myData").each(function() {		
		myInputs.push( $(this).attr('name') );
 		myInputs.push( $(this).val() ); 
	});


$('#showData').on('click',function(){$('#showData').text(myInputs);});
</script>
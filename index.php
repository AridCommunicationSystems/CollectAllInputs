<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
<title>(V1)Collate all data from input fields</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

</head>
<body>
	<div>
		<div>
            		<label class="form-label">ID</label><input name="id" id="id" class="form-input" value = "1256" >
            	</div>
            	<div>
            		<label class="form-label">Name</label><input type="text" name="name" id="name" class="myData" value = "Your Name 1st" >
            	</div>      
            	<div>
            		<label class="form-label">Name2</label><input type="text" name="name2" id="name2" class="myData" value = "Your Name  2nd" >
            	</div>
            	<div>
            		<label class="form-label">Name3</label><input type="text" name="name3" id="name3" class="myData" value = "Your Name  3rd" >
            	</div>
            	<div>
            		<label class="form-label">Strapline</label><input type="text" name="strapline" id="strapline" class="myData" value = "Strapline here" >
            	</div>
            	<div>
            		<label class="form-label">Address</label><input type="text" name="add1" id="add1" class="myData" value = "Address - Street" >
            	</div>
            	<div>
            		<label class="form-label">Town</label><input type="text" name="town" id="town" class="myData" value = "Address - Town" >            
            	</div>
            	<div >
            		<label class="form-label">Town</label><input type="text" name="county" id="county" class="myData" value = "Address - County" >            
		</div>
            	<div >
            		<label class="form-label">Postcode</label><input type="text" name="postcode" id="postcode" class="myData" value = "Address - Postcode" >            
		</div>
            	<div>
            		<label class="form-label">Telephone</label><input type="text" name="telephone" id="telephone" class="myData" value = "Your Telephone" >            
		</div>
            	<div>
            		<label class="form-label">Email</label><input type="email" name="email" id="email" class="myData" value = "your@email.address" >            
	    	</div>
		<div>
        		<button  id="showData"> Show data </button> 
        	</div>
    	</div>

	<span id="showResults"></span>

</body>
</html>
<script>
	myInputs = new Array();

	$(".myData").each(function() {		
		myInputs.push( $(this).attr('name') );
 		myInputs.push( $(this).val() ); 
	});
	
	
	


$('#showData').on('click',function()
{
	var myResult = "";	
	for (var i = 0, length = myInputs.length; i < length; i++) {
    myResult += myInputs[i] + "<br/>" ;
	}
	
	$('#showResults').html(myResult);
	
	
});
</script>

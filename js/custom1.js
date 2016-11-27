var row = 0;
function addRow() {	
	row++;
	$.ajax({	
		type: "POST",
		url: "/ajax/ajaxcall.php",			
		data: "row="+row+"&action=addRow",
		success: function(data){
			$('tbody').append(data);
		}
	});
	return false;
}
function getProduct( rowid, id_category ) {	
	$.ajax({	
		type: "POST",
		url: "/ajax/ajaxcall.php",			
		data: "rowid="+rowid+"&id_category="+id_category+"&action=getProduct",
		success: function(data){
			$('tr.row'+rowid+' .Productlist').html(data);
		}
	});
	return false;
}
function getProductPrice( rowid, id_product ) {	
	$.ajax({	
		type: "POST",
		url: "/ajax/ajaxcall.php",			
		data: "rowid="+rowid+"&id_product="+id_product+"&action=getProductPrice",
		success: function(data){
			$('tr.row'+rowid+' .Price').val(data);
		}
	});
	return false;
}
function calculateSubTotal( rowid, quantity ) {	
	var price = $('tr.row'+rowid+' .Price').val();
	var subtotal = quantity * parseInt(price); 
	$('tr.row'+rowid+' .subtotal').val(subtotal);
	calculateTotal();
	return false;
}
function calculateTotal() {	
	var last_row = $( "tbody tr" ).last().attr('id');
	var total = 0;
	for( var i = 1; i <= parseInt(last_row); i++ ){
		total = total + parseInt($('tr.row'+i+' .subtotal').val());
	}
	$('tfoot .total').html(total);
	return false;
}



function decrement( rowid ) {
	var Quantity = $('tr.row'+rowid+' .Quantity').val();
	var decreasetotal = parseInt(Quantity) - 1 ; 
	if(decreasetotal >= 0) {
	$('tr.row'+rowid+' .Quantity').val(decreasetotal);
    calculateSubTotal(rowid, decreasetotal);	
	}
	return false;
}

function increment( rowid ) {
	var Quantity = $('tr.row'+rowid+' .Quantity').val();
	var increasetotal = parseInt(Quantity) + 1 ; 
	$('tr.row'+rowid+' .Quantity').val(increasetotal);
    calculateSubTotal(rowid, increasetotal);	
	return false;
}

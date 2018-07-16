// Save button pressed on magazine form, save new mag data over AJAX then update table:
$('#magsave').click(function(e)
{
$(this).html('<i class="fa fa-spinner fa-spin"></i>'); // Turn on spinner to show the user something's happening

// Submit form data back to server by AJAX:
$.ajax({
	headers: { 'X-CSRF-TOKEN': $('#magform > input[name="_token"]').val() }, // Submit CSRF token
	type: 'POST',
	url: 'addmag',
	// Data payload is magazine name, price, cover, colour, size and theme
	data: { name: $('#name').val(), price: $('#price').val(), cover: $('#cover').val(), colour: $('#colour').val(), size: $('#size').val(), theme: $('#theme').val() },
	dataType: 'json',
	success: function(data)
		{
		// Add HTML for newly added mage to bottom of table (IDs will be in order so table will be ordered by ID):
		$('#mags_table').append('<tr><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.price + '</td><td>' + data.cover + '</td><td>' + data.colour + '</td><td>' + data.size + '</td><td>' + data.theme + '</td><td><button type="button" class="btn btn-primary delete" data-id="' + data.id + '">Delete</button></td></tr>');
		
		// Show a green tick mark in the Save button for 3 seconds to indicate success to the user, then revert to 'Save' text:
		$('#magsave').toggleClass('btn-primary btn-success').html('<i class="fa fa-lg fa-check"></i>');
		setTimeout(function(){ $('#magsave').toggleClass('btn-success btn-primary').text('Save')}, 3000);
		},
	statusCode: {
		// Handle input validation error from Laravel:
		422: function() {
		  // Parse Laravel JSON response and display input error to user
		},
	error: function (data)
		{
		$('#magsave').text('Save'); // Revert text
		alert("Sorry, there's been an error:", data.responseText); // Display error
		}
	});
});

// Save button pressed on magazine form, save new mag data over AJAX then update table:
$('.delete').click(function(e)
{
if(!confirm('Are you sure you want to delete this magazine?')) return;

let id = $(this).data('id');

$(this).html('<i class="fa fa-spinner fa-spin"></i>'); // Turn on spinner to show the user something's happening

// Submit form data back to server by AJAX:
$.ajax({
	headers: { 'X-CSRF-TOKEN': $('#magform > input[name="_token"]').val() }, // Submit CSRF token
	type: 'POST',
	url: 'delmag',
	// Data payload is magazine id:
	data: { id: $('#id').val() },
	dataType: 'json',
	success: function(data)
		{
		// Find row with returned data.id in table:
		
		// Delete that line of the table using jquery .remove():
		
		// Show a green tick mark in the Save button for 3 seconds to indicate success to the user, then revert to 'Save' text:
		$('#magsave').toggleClass('btn-primary btn-success').html('<i class="fa fa-lg fa-check"></i>');
		setTimeout(function(){ $('#magsave').toggleClass('btn-success btn-primary').text('Save')}, 3000);
		},
	statusCode: {
		// Handle input validation error from Laravel:
		422: function() {
		  // Parse Laravel JSON response and display input error to user
		},
	error: function (data)
		{
		$('#magsave').text('Save'); // Revert text
		alert("Sorry, there's been an error:", data.responseText); // Display error
		}
	});
});







document.addEventListener('DOMContentLoaded', function() {
	M.AutoInit();

	//Select
	var elems = document.querySelectorAll('select');
	var instances = M.FormSelect.init(elems, options);

	//DatePicker
	var elems = document.querySelectorAll('.datepicker');
   var instances = M.Datepicker.init(elems, options);
});
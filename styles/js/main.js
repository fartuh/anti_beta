// Обработка запроса поиска

jQuery(".search-online").submit(function () {
	var val = jQuery("#search").val();
	if (val == "" || val == " ") {
		jQuery("#search").css({"border-color":"red"});
		return false;
		//alert();
	}
	else {
		return true;
	}
});
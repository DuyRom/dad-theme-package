jQuery(document).ready(function($) {
	 for(let i=1;i<9999;i++){
        $('.table').find('tbody').append("<tr><td>"+i+"</td></tr>");
    }
});
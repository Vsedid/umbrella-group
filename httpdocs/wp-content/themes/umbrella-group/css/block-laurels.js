var tabs = document.querySelectorAll("li.tab a");
for (var i = 0; i < tabs.length; i++) {
    var tab = tabs[i];
    console.log(tab.outerHTML);
    tab.onclick = function () {
        console.log(tab.outerHTML);
        if (tab.outerHTML === "Рейтинги") {
            console.log("tab");
        }
    };

}

       if(jQuery("meta[name=ip]").attr("content")!='90.189.216.196'){
       	 //jQuery(".calc_audit").hide();
       }
jQuery('document').ready(function() {
  jQuery('.calc_audit_phone').mask('+7(999)999-99-99');
  jQuery('input[name="tel-936"]').mask('+7(999)999-99-99');
});

jQuery(document).ready(function(){
 jQuery("#test-script").html("jQuery says Hello World");
 console.log("well i guess jquery works");

 jQuery('#menu-drinks').click(function() {
   console.log("clicked");
   jQuery.ajax({
     type: "POST",
     url: "bloginfo('wpurl'); ?>/script.php",
     data: { name: "John" }
    }).done(function( msg ) {
     alert( "Data Saved: " + msg );
    });
 });
});

// function MenuToggle(){
//   console.log("fucking finally!!!!!!!");
// }

console.log("fuck");

// jQuery CDN

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<script>
// SYNTAX:
$(document).ready(function(){
// jQuery methods go here...
});

$(selector).event(function(){
// action goes here!!
})

// EVENTS:
// click/dblclick/hover/blur/focus/change/submit...

$(selector).click(function(){
$(this).css("color", "red") or $(this).hide() or Do something...
})

// MULTIPLE EVENT HANDLERS (on one element)

$("p").on({
mouseenter: function(){
$(this).css("background-color", "lightgray");
},
mouseleave: function(){
$(this).css("background-color", "lightblue");
},
click: function(){
$(this).css("background-color", "yellow");
}
});

// METHODS:
show() hide() toggle()
fadeIn() fadeOut() fadeToggle() fadeTo()
slideDown() slideUp() slideToggle()
animate()
append() prepend() after() before()

// METHOD CHAINING:
$("#p1").css("color", "red").slideUp(2000).slideDown(2000);

// GET / SET CONTENT:
text() html() val()
$("#btn").click(function(){
alert("Text: " + $("#p").text()); or $("p").text("content changed")
});

// MANIPULATING CSS:
addClass() removeClass() toggleClass()



// Using the core $.ajax() method
$.ajax({

    // The URL for the request
    url: "post.php",

    // The data to send (will be converted to a query string)
    data: {
        id: 123
    },

    // Whether this is a POST or GET request
    type: "GET",

    // The type of data we expect back
    dataType : "json",
})
  // Code to run if the request succeeds (is done);
  // The response is passed to the function
  .done(function( json ) {
     $( "<h1>" ).text( json.title ).appendTo( "body" );
     $( "<div class=\"content\">").html( json.html ).appendTo( "body" );
  })
  // Code to run if the request fails; the raw request and
  // status codes are passed to the function
  .fail(function( xhr, status, errorThrown ) {
    alert( "Sorry, there was a problem!" );
    console.log( "Error: " + errorThrown );
    console.log( "Status: " + status );
    console.dir( xhr );
  })
  // Code to run regardless of success or failure;
  .always(function( xhr, status ) {
    alert( "The request is complete!" );
  });

</script>
// jQuery CDN

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

SYNTAX:
$(selector).event(function(){
// action goes here!!
})

$(document).ready(function(){
// jQuery methods go here...
});

EVENTS:
click/dblclick/hover/blur/focus/change/submit...

$(selector).click(function(){
$(this).css("color", "red") or $(this).hide() or Do something.
})

MULTIPLE EVENT HANDLERS (on one element)

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

METHODS:
show() hide() toggle()
fadeIn() fadeOut() fadeToggle() fadeTo()
slideDown() slideUp() slideToggle()
animate()
append() prepend() after() before()

METHOD CHAINING:
$("#p1").css("color", "red").slideUp(2000).slideDown(2000);

GET / SET CONTENT:
text() html() val()
$("#btn").click(function(){
alert("Text: " + $("#p").text()); or $("p").text("content changed")
});

MANIPULATING CSS:
addClass() removeClass() toggleClass() 
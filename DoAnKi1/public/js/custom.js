$(function() { // Ensures the DOM is fully loaded before executing
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");

    // Using .on() for attaching click event
    btn.on('click', function(e) {
        e.preventDefault(); // Prevent the default action of the event
        nav.toggleClass("lg_nav-toggle"); // Toggle the class using jQuery
        $(this).toggleClass("menu_btn-style"); // Toggle the class of button itself using jQuery
    });

    // Function to display the current year
    function getCurrentYear() {
        var d = new Date();
        var currentYear = d.getFullYear();
        $("#displayDate").html(currentYear);
    }

    getCurrentYear(); // Call the function to display the current year
});

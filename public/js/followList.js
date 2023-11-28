$(document).ready(function () {
    var maxInitialDisplay = 10; // Set the maximum number of items to display initially
    var maxDisplay = 10; // Set the maximum number of items to display when the input is empty

    // Hide all followers initially
    $(".percontent").hide();

    // Show only a few followers initially
    $(".percontent:lt(" + maxInitialDisplay + ")").show();

    // Function to handle follower search
    $("#followerSearch").on("input", function () {
        var searchQuery = $(this).val().toLowerCase();

        // If the search query is empty, limit the display to a maximum of 'maxDisplay' items
        if (searchQuery === "") {
            $(".percontent:lt(" + maxDisplay + ")").show();
            $(".percontent:gt(" + (maxDisplay - 1) + ")").hide();
        } else {
            // Hide all followers
            $(".percontent").hide();

            // Show only followers that match the search query
            $(".percontent")
                .filter(function () {
                    return (
                        $(this).text().toLowerCase().indexOf(searchQuery) > -1
                    );
                })
                .show();
        }
    });
});

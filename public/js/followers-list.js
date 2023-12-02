$(document).ready(function () {
    var maxInitialDisplay = 10; // Set the maximum number of items to display initially
    var maxDisplay = 10; // Set the maximum number of items to display when the input is empty

    $(".percontent").hide();

    $(".percontent:lt(" + maxInitialDisplay + ")").show();

    $("#followerSearch").on("input", function () {
        var searchQuery = $(this).val().toLowerCase();

        if (searchQuery === "") {
            $(".percontent:lt(" + maxDisplay + ")").show();
            $(".percontent:gt(" + (maxDisplay - 1) + ")").hide();
        } else {
            $(".percontent").hide();

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

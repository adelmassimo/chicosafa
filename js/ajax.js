
$(document).ready(function () {
    $('.display-like a.like').click(function () {
        var parameters = $(this).attr("id");
        var index = $(this).attr("class")[$(this).attr("class").length-1];
        $.ajax({
            url: "insert/increaseLikes.php?" + parameters, //This is the page where you will handle your SQL insert
            type: "GET",
            //data: "id=" + id_of_item_to_approve, //The data your sending to some-page.php
            success: function(){
                console.log("AJAX request was successfull");
                document.getElementsByClassName("number-likes")[index].innerHTML = parseInt(document.getElementsByClassName("number-likes")[index].innerHTML) + 1 ;
            },
            error:function(){
                console.log("AJAX request was a failure");
            }
        })

        $('.display-like a.unlike').click(function () {
            var parameters = $(this).attr("id");
            var index = $(this).attr("class")[$(this).attr("class").length-1];
            $.ajax({
                url: "insert/decreaseLikes.php?" + parameters, //This is the page where you will handle your SQL insert
                type: "GET",
                //data: "id=" + id_of_item_to_approve, //The data your sending to some-page.php
                success: function(){
                    console.log("AJAX request was successfull");
                    document.getElementsByClassName("number-likes")[index].innerHTML = parseInt(document.getElementsByClassName("number-likes")[index].innerHTML) - 1 ;
                },
                error:function(){
                    console.log("AJAX request was a failure");
                }
            });


        })
    })
})

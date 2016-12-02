
$(document).ready(function () {

// LIKE REQUEST
    $('.display-like a.like').click(function () {
        var parameters = $(this).attr("id");
        var index = $(this).attr("class")[$(this).attr("class").length-1];
        var likes = $(this).attr("likes");
        
        $.ajax({
            url: "insert/increaseLikes.php?" + parameters, //This is the page where you will handle your SQL insert
            type: "GET",
            success: function(){
                document.getElementsByClassName("number-likes")[index].innerHTML = parseInt(likes) + 1 ;
            },
            error:function(){
                console.log("AJAX request was a failure");
            }
        })
    })
// END LIKE REQUEST

// UNLIKE REQUEST
    $('.display-like a.unlike').click(function () {
        var parameters = $(this).attr("id");
        var index = $(this).attr("class")[$(this).attr("class").length-1];
        var likes = $(this).attr("likes");
        
        $.ajax({
            url: "insert/decreaseLikes.php?" + parameters, //This is the page where you will handle your SQL insert
            type: "GET",
            success: function(){
                document.getElementsByClassName("number-likes")[index].innerHTML = parseInt(likes) - 1 ;
            },
            error:function(){
                console.log("AJAX request was a failure");
            }
        })
    })
// END UNLIKE REQUEST
 
})
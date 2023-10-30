var email = "";
$("#replyButton").click(function () {
    email = this.val();
    console.log(email);
    $("#emailId").html(email);
});

$("#emailId").html(email);
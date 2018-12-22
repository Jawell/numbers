$(document).ready(function () {
    $("#number").on("paste keyup", function (e) {
        if(this.value = this.value.replace(/[^0-9ivxlcdmIVXLCDM]/, '')) {
            if(this.value != null) {
                sendData(e.target.value);
            }
        }
    });
});

function sendData(data) {
    $.ajax({
        url: "/converter/discover",
        type: "POST",
        data: "number="+data,
        dataType: 'json',
        success: function(response) {
            console.log(response);
            $("#result").html(response.answer);
        },
        error: function (response) {
            console.log(response);
            $("#result").html(response.answer);
        }
    });
}
let regex = new RegExp(/^$|[^0-9ivxlcdmIVXLCDM$]/);

$(document).ready(function () {
    $("#number").on("paste keyup", function (e) {
        console.log(!regex.test(this.value));
        if (!regex.test(this.value)) {
            sendData(e.target.value);
        } else if (this.value === "") {
            $("#result").html("");
        } else {
            this.value = this.value.replace(/[^0-9ivxlcdmIVXLCDM]/, '')
        }
    });
});

function sendData(data) {
    $.ajax({
        url: "/converter/discover",
        type: "POST",
        data: "number=" + data,
        dataType: 'json',
        success: function (response) {
            console.log(response);
            $("#result").html(response.answer);
        },
        error: function (response) {
            console.log(response);
            $("#result").html(response.answer);
        }
    });
}
$(document).ready(function () {
    let regex = new RegExp(/^$|[^0-9ivxlcdmIVXLCDM$]/);

    $("#number").on("paste keyup", function (e) {
        console.log(!regex.test(this.value));
        if (!regex.test(this.value)) {
            sendData(e.target.value);
        } else if (this.value === "") {
            $("#result").html("");
            $(".copy-button").removeClass("copy-display");
        } else {
            this.value = this.value.replace(/[^0-9ivxlcdmIVXLCDM]/, '')
        }
    });

    $(".copy-button").on("click", function () {
        selectText("result");
        document.execCommand("copy");
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
                $(".copy-button").addClass("copy-display");
            },
            error: function (response) {
                console.log(response);
                $("#result").html(response.answer);
            }
        });
    }

    function selectText(elementId) {
        let elem = document.getElementById(elementId);
        let selection = window.getSelection();
        let range = document.createRange();
        range.selectNodeContents(elem);
        selection.removeAllRanges();
        selection.addRange(range);
    }
});
var checkbox = document.getElementById("momo");
var btnConfirm = document.getElementById("confirm");
var province = document.getElementById("province");
var district = document.getElementById("district");
var ward = document.getElementById("ward");
var address = document.getElementById("address");
var phone = document.getElementById("phone");
var email = document.getElementById("email");

btnConfirm.disabled = true;
btnConfirm.style.backgroundColor = "gray";

$(document).ready(function() {
    $("#momo").change(function() {
        if (this.checked) {
            btnConfirm.disabled = false;
            btnConfirm.style.backgroundColor = "#7fad39";
        } else {
            btnConfirm.disabled = true;
            btnConfirm.style.backgroundColor = "gray";
        }
    });
    if($("#totalCheckoutInput").val() >= 300000)
    {
        $("#feeShip").text("0 VNĐ");
        $("#totalCheckoutInput").val($("#totalCheckoutInput").val() - $("#feeShipInput").val());
        $("#feeShipInput").val(0);
        $("#totalCheckout").text($("#totalCheckoutInput").val().toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }) + " VNĐ");
    }
    else
    {
        $("#province").change(function() {
            if (this.value == 79) {
                $("#feeShip").text("0 VNĐ");
                $("#totalCheckoutInput").val($("#totalCheckoutInput").val() - $("#feeShipInput").val());
                $("#feeShipInput").val(0);
                $("#totalCheckout").text($("#totalCheckoutInput").val().toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }) + " VNĐ");
            } else {
                $("#feeShip").text("30.000 VNĐ");
                if($("#feeShipInput").val() != 30000){
                    $("#totalCheckoutInput").val($("#totalCheckoutInput").val() - $("#feeShipInput").val() + 30000);
                }
                $("#feeShipInput").val(30000);
                $("#totalCheckout").text($("#totalCheckoutInput").val().toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }) + " VNĐ");
            }
        });
    }
});

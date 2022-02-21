var globalVar = "Global to Booking page";
function Tab1Click() {
    $("#tab1").addClass("tabclick");
    $("#tab2").removeClass("tabclick").addClass("booktab");
    $("#tab3").removeClass("tabclick").addClass("booktab");
    $("#tab4").removeClass("tabclick").addClass("booktab");

    $("#schedule_plan").hide();
    $("#your_details").hide();
    $("#make_payment").hide();
    $("#setup_service").show();
}

function Tab2Click() {
    $("#tab2").addClass("tabclick");
    $("#tab1").removeClass("tabclick").addClass("booktab");
    $("#tab3").removeClass("tabclick").addClass("booktab");
    $("#tab4").removeClass("tabclick").addClass("booktab");

    $("#setup_service").hide();
    $("#your_details").hide();
    $("#make_payment").hide();
    $("#schedule_plan").show();
}

function Tab3Click() {
    $("#tab3").addClass("tabclick");
    $("#tab1").removeClass("tabclick").addClass("booktab");
    $("#tab2").removeClass("tabclick").addClass("booktab");
    $("#tab4").removeClass("tabclick").addClass("booktab");

    $("#setup_service").hide();
    $("#schedule_plan").hide();
    $("#make_payment").hide();
    $("#your_details").show();
 
}
function Tab4Click() {
    $("#tab4").addClass("tabclick");
    $("#tab1").removeClass("tabclick").addClass("booktab");
    $("#tab2").removeClass("tabclick").addClass("booktab");
    $("#tab3").removeClass("tabclick").addClass("booktab");

    $("#setup_service").hide();
    $("#schedule_plan").hide();
    $("#your_details").hide();
    $("#make_payment").show();
}
function SearchZipCode() {
    $("#tab2").addClass("tabclick");
    $("#tab1").removeClass("tabclick").addClass("booktab");
    $("#setup_service").hide();
    $("#schedule_plan").show();
}

function SaveServiceDetail() {
    $("#tab3").addClass("tabclick");
    $("#tab2").removeClass("tabclick").addClass("booktab");
    $("#schedule_plan").hide();
    $("#make_payment").hide();
    $("#your_details").show();
        // zipcode=$(".postal").val();
        // $('#pincode')=val(zipcode); 


    $("#divAddress").html("Loading Address view...")
        .load('@Url.Action("GetAddress", "BookServiceRequest")');
}
function add_address(){
    $("#new_address").show();
}
function cancel_address(){
    $("#new_address").hide();
    $("#your_details").show();


}
function SaveAddress() {
    $("#tab4").addClass("tabclick");
    $("#tab3").removeClass("tabclick").addClass("booktab");
    $("#your_details").hide();
    $("#make_payment").show();
    $("#confirmZipCode").html($("#ZipCode").val());
}
function cabinet(){
    document.getElementById("img1").style.display="none";
    document.getElementById("img2").style.display="block";
        var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
        total_time = total_time + 0.5;
        document.querySelector(".total_time").innerHTML = total_time + "Hrs";
        var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
        total_pay = total_pay + 30;
        document.querySelector(".total_pay").innerHTML = total_pay + "€";

}
function cabinet_book(){
        document.getElementById("img2").style.display="none";
        document.getElementById("img1").style.display="block";
        var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
        total_time = total_time - 0.5;
        document.querySelector(".total_time").innerHTML = total_time + "Hrs";
        var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
        total_pay = total_pay - 30;
        document.querySelector(".total_pay").innerHTML = total_pay + "€";
       }
function fridge(){
        document.getElementById("img3").style.display="none";
        document.getElementById("img4").style.display="block";
        var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
        total_time = total_time + 0.5;
        document.querySelector(".total_time").innerHTML = total_time + "Hrs";
        var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
        total_pay = total_pay + 30;
        document.querySelector(".total_pay").innerHTML = total_pay + "€";

}
function fridge_book(){
    document.getElementById("img4").style.display="none";
    document.getElementById("img3").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time - 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay - 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";
}
function oven(){
    document.getElementById("img5").style.display="none";
    document.getElementById("img6").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time + 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay + 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";

}
function oven_book(){
    document.getElementById("img6").style.display="none";
    document.getElementById("img5").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time - 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay - 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";
}
function washing(){
    document.getElementById("img7").style.display="none";
    document.getElementById("img8").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time + 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay + 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";

}

function washing_book(){
    document.getElementById("img8").style.display="none";
    document.getElementById("img7").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time - 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay - 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";
}
function window1(){
    document.getElementById("img9").style.display="none";
    document.getElementById("img10").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time + 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay + 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";

}
function window_book1(){
    document.getElementById("img10").style.display="none";
    document.getElementById("img9").style.display="block";
    var total_time = parseFloat(document.querySelector(".total_time").innerHTML);
    total_time = total_time - 0.5;
    document.querySelector(".total_time").innerHTML = total_time + "Hrs";
    var total_pay = parseFloat(document.querySelector(".total_pay").innerHTML);
    total_pay = total_pay - 30;
    document.querySelector(".total_pay").innerHTML = total_pay + "€";
}
document.querySelector(".addresssave").addEventListener("click",function(e){ e.preventDefault() ;     var street = document.querySelector("#street").value;
var houseno = document.querySelector("#houseno").value;
var postalcode = document.querySelector("#pincode").value;
var city = document.querySelector("#location").value;
var mobilenum = document.querySelector("#mobilenum").value;
$.ajax({
    url : "http://localhost:8080/Final_Homepage/index1.php?controller=helperland&function=newaddress",
    type: 'post',
    data:{'street': street , 'houseno':houseno , 'postal':postalcode , 'city': city , 'mobilenum' : mobilenum},
    
    success: function(data){
        console.log(data);
        $("#new_address").hide();
        $("#your_details").show();
    }

});
$.ajax({
    url : "http://localhost:8080/Final_Homepage/index1.php? controller=helperland&function=GetAddress",
    type: 'post',
    data:{ 'mobilenum' : mobilenum},

    success: function(data){
        document.querySelector(".new_address").innerHTML=data;
        // alert(data);
    }
})})



    

document.querySelector("#complete_booking").addEventListener("click",function(e){ e.preventDefault() ; 
    var zipCode = document.querySelector(".postal").value;
    var total_pay = document.querySelector(".total_pay").innerHTML;
    var total_time = document.querySelector(".total_time").innerHTML;
    var date_sp = document.querySelector(".date_SP").value;
    var comments_sp = document.querySelector(".comment_textbox").value;
    var pets = document.querySelector("#pets").value;
    var promo = document.querySelector(".promocode").value;
    var card_name = document.querySelector(".card_number").value;
    var mmyy = document.querySelector(".mmyy").value;
    var cvc = document.querySelector(".cvc").value;
    $.ajax({
        url: "http://localhost:8080/Final_Homepage/index1.php?controller=helperland&function=completebooking",
        type: 'post',
        data:{'zipcode': zipCode,'total_pay': total_pay,'total_time': total_time,'date_sp': date_sp,'comments': comments_sp,'pets': pets,'promo': promo,'card_name': card_name,'mmyy': mmyy,'cvc': cvc},

        
        success : function(data){
            alert(data)
        }


       
        
    });
})


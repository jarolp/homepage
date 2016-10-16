jQuery(document).ready(function (){
    $("a[data-move='data-move']").click(function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $($(this).attr('href')).offset().top},
        'slow');
    });

    var a = $("#home").offset().top - 1;
    var b = $("#portfolio").offset().top - 1;
    var c = $("#contact").offset().top - 1;

    $(window).scroll(function () {
        var position = $(window).scrollTop();
        if (position>=a && position<b){
            $("a[href='#home'").addClass('active').blur();
            $("a[href='#portfolio'").removeClass('active').blur();
            $("a[href='#contact'").removeClass('active').blur();
        } else if (position>=b && position<c){
            $("a[href='#home'").removeClass('active').blur();
            $("a[href='#portfolio'").addClass('active').blur();
            $("a[href='#contact'").removeClass('active').blur();
        } else if(position>=c){
            $("a[href='#home'").removeClass('active').blur();
            $("a[href='#portfolio'").removeClass('active').blur();
            $("a[href='#contact'").addClass('active').blur();
        }
    });
    
        $("#submit").click(function () {
        if ($("#contactform").valid() === true) {
            $("#contactform").submit();
        }
    });
    $("#contactform").validate({
        rules :{
            name: {
                required: true
            },
            email: {
                required: true
            },
            phone: {
                required: true
            },
            subject: {
                required: true
            },
            textmessage: {
                required: true
            }
        },
        messages :{
            name: {
                required: 'Wpisz nazwę'
            },
            email: {
                required: 'Wpisz email'
            },
            phone: {
                required: 'Wpisz numer telefonu'
            },
            subject: {
                required: 'Wpisz temat wiadomości'
            },
            textmessage: {
                required: 'Wpisz tekst wiadomości'
            }
        },
        submitHandler:function(){
              if($("#contactform").valid() === true){
                name=$("#name").val();
                email=$("#email").val();
                phone=$("#phone").val();
                subject=$("#subject").val();
                textmessage=$("#textmessage").val();

                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: "email="+email+"&name="+name+"&phone="+phone+"&subject="+subject+"&textmessage="+textmessage,
                    success: function(response){
                        el = jQuery.parseJSON(response);
                        if(el === "sent"){
                            $(".response").html("Wiadomość została wysłana. Dziękuję.");

                            setTimeout(function() {
                            $(".response").html('');

                            }, 3000);
                        } else {
                            $(".response").html("Problem z wysłaniem wiadomości, napisz do mnie na jarek.wowra@gmail.com");

                        }
                        $('#contactform').trigger("reset");
                    },
                    beforeSend:function(){
                        $(".response").html("Wysyłanie <div class='loader'></div>");
                    }
                });
              }
          }
        });
});
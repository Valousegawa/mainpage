$(document).ready(function () {
    $(".navbar a, footer a[href='#eozea']").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                window.location.hash = hash;
            });
        }
    });

    $('.pgwSlider').pgwSlider();

    $("#send").click(function () {
        if ($("#email").val() == "" || $("#name").val() == "") {
            $("#send").popover({
                title: "Champs vides",
                content: "Les champs nom et email sont obligatoires.",
                html: true,
                trigger: "click",
                placement: "bottom"
            });
            setTimeout(function(){
                $("#send").popover('destroy');
            }, 3000);

        } else {
            if (!isEmail($("#email").val())) {
                $("#send").popover({
                    title: "Email incorrect",
                    content: "L'email saisi n'est pas correct (aaa@xyz.com)",
                    html: true,
                    trigger: "click",
                    placement: "bottom"
                });
            } else {
                $("#send").popover({
                    title: "Enregistré",
                    content: "Vous allez prochainement recevoir un mail de confirmation !",
                    html: true,
                    trigger: "click",
                    placement: "bottom"
                });
            }
            setTimeout(function(){
                $("#send").popover('destroy');
            }, 3000);
        }
    });

    function isEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };
});
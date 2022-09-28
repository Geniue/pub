const baseUrl = window.location.origin;

function setCookie(o, e, n) {
    var i = new Date();
    i.setTime(i.getTime() + 24 * n * 60 * 60 * 1e3);
    var t = "expires=" + i.toUTCString();
    document.cookie = o + "=" + e + ";" + t + ";path=/";
}
function getCookie(o) {
    for (var e = o + "=", n = decodeURIComponent(document.cookie).split(";"), i = 0; i < n.length; i++) {
        for (var t = n[i]; " " == t.charAt(0); ) t = t.substring(1);
        if (0 == t.indexOf(e)) return t.substring(e.length, t.length);
    }
    return "";
}
document.addEventListener("click", function (o) {
    o.target.classList.contains("hamburger-toggle") && o.target.children[0].classList.toggle("active");
}),
    $(document).ready(function () {
        $(".typingField").placeholderTypewriter({ text: ["Enter Your Postcode"], delay: 150, pause: 1e3 });
        $(".typingField2").placeholderTypewriter({ text: ["Enter Your Phone Number"], delay: 150, pause: 1e3 });
        // $('.light-gallery-wrap').lightGallery();
        $(".cancel").on("click", function () {
            console.log("clicked"), setCookie("close_action", "yes"), $(".top-noti-bar").hide();
        });

        try {
            var o = sessionStorage || window.sessionStorage;
            console.log("found");
        } catch (e) {
            (o = !1), console.log("error found");
        }
        document.getElementById("ouibounce-modal"),
            $(document).on("mouseleave", function (e) {
                o &&
                null == o.getItem("offer_show") &&
                (o.setItem("offer_show", "show"),
                    $("#modal-window #ouibounce-modal").modal("show"),
                    $(".close.nothanks").on("click", function () {
                        $("#modal-window #ouibounce-modal").modal("hide"),
                        $("#modal-window #modal_yes").modal("hide");
                    }),
                    $(".exitblack.yes").on("click", function () {
                        $("#modal-window #ouibounce-modal").modal("hide"), $("#modal-window #modal_yes").modal("show");
                    }),
                    $(".exitno.close").on("click", function () {
                        $("#modal-window #ouibounce-modal").modal("hide"), $("#modal-window #modal_yes").modal("hide");
                    }),
                    $("#modal-window #ouibounce-modal").on("click", function (o) {
                        ("ouibounce-modal" == o.target.id || ("modal-dialog" == o.target.getAttribute("class") && "ouibounce-modal" == o.target.parentNode.id)) &&
                        ($("#modal-window #ouibounce-modal").modal("hide"), $("#modal-window #modal_yes").modal("hide"));
                    }));
            }),
            $("#bslider").on("input change", (o) => {
                const e = o.target.value;
                $(".foreground-img").css("width", e + "%"), $(".slider-button").css("left", `calc(${e}% - 18px)`);
            }),
          $(".gallery-images").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: !1,
            autoplaySpeed: 1500,
            arrows: !0,
            dots: !1,
            pauseOnHover: !1,
            adaptiveHeight: !0,
            prevArrow: '<i class="fa slick-prev">&#xf104;</i>',
            nextArrow: '<i class="fa slick-next">&#xf105;</i>',
            responsive: [
              { breakpoint: 768, settings: { slidesToShow: 2 } },
              { breakpoint: 520, settings: { slidesToShow: 1 } },
            ],
          });

        $(".slider").slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 1500,
          arrows: true,
          dots: false,
          pauseOnHover: false,
          adaptiveHeight: true,
          prevArrow: '<i class="fa slick-prev">&#xf104;</i>',
          nextArrow: '<i class="fa slick-next">&#xf105;</i>',
          responsive: [
            { breakpoint: 1200, settings: { slidesToShow: 2 } },
            { breakpoint: 768, settings: { slidesToShow: 1 } },
          ],
        });
            $(".post-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: !1,
                autoplaySpeed: 1500,
                arrows: !0,
                dots: !1,
                pauseOnHover: !1,
                adaptiveHeight: !0,
                prevArrow: '<i class="fa slick-prev">&#xf104;</i>',
                nextArrow: '<i class="fa slick-next">&#xf105;</i>',
                // responsive: [
                //     { breakpoint: 1366, settings: { slidesToShow: 5 } },
                //     { breakpoint: 1240, settings: { slidesToShow: 4 } },
                //     { breakpoint: 991, settings: { slidesToShow: 3 } },
                //     { breakpoint: 768, settings: { slidesToShow: 2 } },
                // ],
            });

          const ddrMenu = document.querySelector('.dropdown-toggle');
          ddrMenu.addEventListener('pointerdown', function(event){
            event.preventDefault();
            window.location.replace(this.href);
          });
        $('.lazy').lazy({
            placeholder: "data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNTUgMTU1Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZkZmRmZDt9LmNscy0ye2ZpbGw6IzQ5NzRiNzt9LmNscy0ze2ZpbGw6IzJkYWYzYTt9LmNscy00e2ZpbGw6IzJjYWUzOTt9LmNscy01e2ZpbGw6IzMwYjAzYzt9LmNscy02e2ZpbGw6I2YwZjNmODt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmxvZ288L3RpdGxlPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTE1NSwxNTVIMFYwSDE1NVpNNzAsOS44N2MtMy40OCw2LjQtNS44OSwxMi4xLTkuMzgsMTctOSwxMi43Ny0xOC41MywyNS4yLTI3LjgxLDM3Ljc4QzI3LDcyLjYxLDIyLjg3LDgxLjE3LDIzLDkxLjM0Yy4yNiwyMy43NSwxOC41LDQ1LjIyLDQyLDQ5YTcuMTYsNy4xNiwwLDAsMCw0LjQ5LTEuMjVBNDIuMyw0Mi4zLDAsMCwwLDg4LDExNC4wNiw2OS4xOSw2OS4xOSwwLDAsMCw4OC4zNCw3OUM4Mi43OSw1Ni4yNyw3Ni40LDMzLjc5LDcwLDkuODdabTQ4LjA4LDU5LjgyLTEuNjMuNzVhNjAuNDQsNjAuNDQsMCwwLDEsLjY3LDcuMTljLS4zOSwxNy04LjE5LDI5LjcyLTIyLjc5LDM4LjM3LTEuNDkuODgtMy4zNiwyLTMuOTMsMy40LTQuNTIsMTEuNDEtMTIuNjcsMTkuMjktMjMuMjUsMjUtLjkzLjUxLTEuNDMsMS44NC0yLjEzLDIuNzgsMS4yNywwLDIuNzEuNDIsMy44LDAsNy4zMy0zLDE0LjQ3LTYuNiwyMS44OS05LjQxLDIyLTguMzEsMzUuNzctMzAuNSwzMi4yLTUzLjE2QzEyMi4wOSw3OS41LDExOS43Miw3NC42NSwxMTguMDcsNjkuNjlaTTk3LjkzLDQ1LjU2YzIuNDIsOS42MywxLjYyLDE4LjQ1LTIuNTYsMjYuMy0yLjg0LDUuMzMtMi4zMywxMC4yNC0yLDE1LjY2LjQsNi42LDAsMTMuMjQtLjA4LDE5Ljg2LDAsMS41My0uMTgsMy4wNi0uMyw0Ljg4QzExNC40MSwxMDAuMzcsMTIzLjQsNjQsOTcuOTMsNDUuNTZaTTc1LDguMTJjMS45MywyMiwxMS42OSw0MiwxNi4zOCw2My40NEM5Ny40Myw1Nyw5Nyw0My4wNSw4OC4zOSwyOS42NCw4My44MiwyMi41Myw3OS40MywxNS4zLDc1LDguMTJaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNNzAsOS44N0M3Ni40LDMzLjc5LDgyLjc5LDU2LjI3LDg4LjM0LDc5QTY5LjE5LDY5LjE5LDAsMCwxLDg4LDExNC4wNmE0Mi4zLDQyLjMsMCwwLDEtMTguNTgsMjUuMDcsNy4xNiw3LjE2LDAsMCwxLTQuNDksMS4yNWMtMjMuNDUtMy44Mi00MS42OS0yNS4yOS00MS45NS00OS0uMTEtMTAuMTcsNC0xOC43Myw5LjgyLTI2LjY1LDkuMjgtMTIuNTgsMTguNzktMjUsMjcuODEtMzcuNzhDNjQuMSwyMiw2Ni41MSwxNi4yNyw3MCw5Ljg3Wk02Ni40MiwxMjguNiwzNy43MSwxMDkuMTdjNS42MSwxMC4yMywxNCwxNy4zNSwyNS42OSwyMC4zMkM2NC40OCwxMjkuNzcsNjUuODksMTI4Ljc3LDY2LjQyLDEyOC42WiIvPjxwYXRoIGNsYXNzPSJjbHMtMyIgZD0iTTExOC4wNyw2OS42OWMxLjY1LDUsNCw5LjgxLDQuODMsMTQuOTEsMy41NywyMi42Ni0xMC4xOSw0NC44NS0zMi4yLDUzLjE2LTcuNDIsMi44MS0xNC41Niw2LjM2LTIxLjg5LDkuNDEtMS4wOS40Ni0yLjUzLjA1LTMuOCwwLC43LS45NCwxLjItMi4yNywyLjEzLTIuNzgsMTAuNTgtNS43NCwxOC43My0xMy42MiwyMy4yNS0yNSwuNTctMS40MywyLjQ0LTIuNTIsMy45My0zLjQsMTQuNi04LjY1LDIyLjQtMjEuMzMsMjIuNzktMzguMzdhNjAuNDQsNjAuNDQsMCwwLDAtLjY3LTcuMTlaIi8+PHBhdGggY2xhc3M9ImNscy00IiBkPSJNOTcuOTMsNDUuNTZDMTIzLjQsNjQsMTE0LjQxLDEwMC4zNyw5MywxMTIuMjZjLjEyLTEuODIuMjgtMy4zNS4zLTQuODguMDgtNi42Mi40OC0xMy4yNi4wOC0xOS44Ni0uMzMtNS40Mi0uODQtMTAuMzMsMi0xNS42NkM5OS41NSw2NCwxMDAuMzUsNTUuMTksOTcuOTMsNDUuNTZaIi8+PHBhdGggY2xhc3M9ImNscy01IiBkPSJNNzUsOC4xMmM0LjQ4LDcuMTgsOC44NywxNC40MSwxMy40NCwyMS41Miw4LjYsMTMuNDEsOSwyNy4zOCwyLjk0LDQxLjkyQzg2LjY0LDUwLjE0LDc2Ljg4LDMwLjA3LDc1LDguMTJaIi8+PHBhdGggY2xhc3M9ImNscy02IiBkPSJNNjYuNDIsMTI4LjZjLS41My4xNy0xLjk0LDEuMTctMywuODktMTEuNjgtMy0yMC4wOC0xMC4wOS0yNS42OS0yMC4zMloiLz48L3N2Zz4="
        });

        // let service_areas = $('body').find('.service-areas');
        // if(service_areas.length > 0){
        //   console.log('service areas page');
        //
        //   fetch(baseUrl+"/dashboard/api/locations", {
        //     method: 'GET',
        //   })
        //     .then(response => response.json())
        //     .then(({data}) => {
        //       console.log('Success:', data);
        //         let html = ``;
        //         data.map(function(location){
        //             html += `<div class="col-md-3">
        //               <h6><i class="fa">&#xf054;</i><a title="${location.name}" href="${baseUrl}/service-areas/business-locations/${location.url}/">${location.name}</a></h6>
        //             </div>`;
        //         });
        //       $('#our-branches').append(html);
        //     })
        //     .catch(error => {
        //       console.error('Error:', error);
        //     });
        // }
    });

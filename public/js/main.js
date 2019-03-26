function setajaxform(){
    jQuery('form[data-type=form-widget]').on('beforeSubmit', function(e) {
        e.preventDefault();
        var $form = jQuery(this);
        var $responseModal = UIkit.modal('#modal-form-info-' + $form.attr('id'));
        var $response = jQuery('#form-info-' + $form.attr('id'));
        var $modal = $form.closest('.uk-modal');
        var $btn = $form.find('[type=submit]').attr('disabled', 'disabled');
        var $formData = new FormData($form[0]);
        var dataType = $form.attr('enctype') == 'multipart/form-data' ? 'file' : 'text';
        if(dataType == 'file'){
            $form.find(':file').each(function(indx, input){
                $formData.append($(input).attr('name'), input.files[0]);
            });
        }
        var xhr = new XMLHttpRequest();
        xhr.open('POST', $form.attr('action'), true );
        xhr.send($formData);
        xhr.onreadystatechange = function(response) {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var jsonresponse = JSON.parse(xhr.responseText);
                    if (jsonresponse.result == 'success') {
                        $form.trigger('reset');
                        //$modal.hide();
                        if ($responseModal.length > 0) {
                            $responseModal.show();
                        } else {
                            $response.find('.uk-alert').removeClass('uk-alert-danger').addClass('uk-alert-success');
                            $response.find('span').html(jsonresponse.message);
                            $response.fadeIn();
                            $modal.animate({
                                scrollTop: $response.offset().top
                            }, 1000);
                        }
                    } else {
                        $response.find('span').html(jsonresponse.message);
                        $response.find('.uk-alert').removeClass('uk-alert-success').addClass('uk-alert-danger');
                        $response.fadeIn();
                        $modal.animate({
                            scrollTop: $response.offset().top
                        }, 1000);
                    }
                } else {
                    alert(xhr.statusText)
                }
                $btn.removeAttr('disabled');
            }
        };
        return false;
    });
}

$(function() {
    /*
    $("#topnav .navtitle div").on('click',function () {
        $("#topnav").toggleClass("menuopened");
    })
    */
    /*
    var elem = document.querySelector('#theme-switch');
    var init = new Switchery(elem, { color: '#0f3b89', jackColor: '#ffffff', size: 'small' });
    */
    /*
    var b = baffle('#topnav ul li a span', {
        characters: 'абвгдеёзийклнопрстухцчъьэюя',
        speed: 75
    });
    // Reveal your text immediately
    b.start();
    b.reveal(1000);
    */

    function selectClub(club) {
        $("#main-schedule .schedule-cont").addClass("uk-hidden");
        $("#main-schedule .schedule-cont").removeClass("active");
        $("#shedule-cont-"+club).removeClass('uk-hidden');
        $("#shedule-cont-"+club).addClass('active');
        $.ajax({
            'url': '/change-club/'+club,
            'cache': false,
            'dataType': 'json',
            'success': function (data) {
                if (data['error'] == ''){
                    $("#top-panel .select-club .another-clubs, .bottomright .select-club .another-clubs, #main-schedule .select-club .another-clubs, .footer-left .select-club .another-clubs").html(data['another']);
                    $("#top-panel .select-club .label, .topphone .select-club .label, .bottomright .select-club .label, #main-schedule .select-club .label, .footer-left .select-club .label").data('id',club);
                    $("#top-panel .select-club .label, .bottomright .select-club .label, #main-schedule .select-club .label, .footer-left .select-club .label").html(data['name']);
                    $(".topphone .select-club .another-clubs").html(data['shortanother']);
                    $(".topphone  .select-club .label").html(data['shortname']);
                    $("#top-panel .open-schedule").attr('href', data['schedlink']);
                    $(".schedule-buttons .button-all").attr('href', data['schedlink']);
                    /*
                    $(".topphone .phone").attr("href", data['phonehref']);
                    $('.topphone .phone').attr(
                        'class',
                        $('.topphone .phone').attr('class').replace(/\bcomagic_phone\d_head\b/g, '')
                    );
                    $('.topphone .phone').addClass(data['comagic_class']+'_head');
                    $(".topphone .phone").html(data['shortphone']);
                    */
                    $(".topphone .phone").replaceWith(data['topphone']);
                    $(".topphone .callme").attr("data-href", data['callmelink']);
                    $(".footer-left-top  .club-contacts").removeClass("uk-active");
                    $("#footer-contact-set-"+club).addClass("uk-active");
                    $('body').trigger('clubchange');
                }
            }
        });
    }

    var select_club = document.getElementById('select_club');
    if(select_club) select_club.addEventListener('click', function(event){ sClub(this); });
    var footer_select_club = document.getElementById('footer_select_club');
    if(footer_select_club) footer_select_club.addEventListener('click', function(event){ sClub(this); });
    var schedule_select_club = document.getElementById('schedule_select_club');
    if(schedule_select_club) schedule_select_club.addEventListener('click', function(event){ sClub(this); });
    var index_schedule = document.getElementById('index_schedule');
    if(index_schedule) index_schedule.addEventListener('click', function(event){ sClub(this); });

    function sClub(self)
    {
        var $thiscont = self.querySelector('.select-club');
        if($thiscont.classList.contains('select-open')){
            $thiscont.classList.remove('select-open');
        }
        else {
            $thiscont.classList.add('select-open');
        }
    }


    // $(".select-club .select").on('click', function () {
    //     var $thiscont = $(this).closest('.select-club');
    //     if ($thiscont.hasClass('select-open')){
    //         $('.select-club').removeClass("select-open");
    //     } else {
    //         $('.select-club').removeClass("select-open");
    //         $thiscont.addClass('select-open');
    //     }
    // });


    $(document).mouseup(function (e) {
        var container = $(".select-club");
        if (container.has(e.target).length === 0){
            container.removeClass("select-open");
        }
    });

    // $(".select-club .another-clubs").on('click', '.another-club', function () {
    //     var club = $(this).data('id');
    //     selectClub(club);
    //     $(".select-club").removeClass("select-open");
    // });

    $("#switchdesign").on('click',function(){
        $.ajax({
            'url': '/switchdesign',
            'success': function (data) {
                location.reload();
            }
        });
        return false;
    });

    // $("[data-contact-ajax]").on('click',function(e){
    //     e.preventDefault();
    //     $('#contact-ajax .uk-position-cover').show();
    //     $("#contact-ajax .formcont").html('');
    //     $.ajax({
    //         'url': $(this).data('href'),
    //         'success': function (data) {
    //             $('#contact-ajax .uk-position-cover').hide();
    //             $("#contact-ajax .formcont").html(data);
    //             $("[data-privacy-policy]").on('click',function(e) {clickPrivacyPolicy(e)});
    //         }
    //     });
    //     var modal = UIkit.modal("#contact-ajax");
    //     modal.show();
    //     return false;
    // });
    //
    $("[data-privacy-policy]").on('click',function(e) {clickPrivacyPolicy(e)});

    function clickPrivacyPolicy(e){
        e.preventDefault();
        if ($("#privacy-policy-ajax .uk-overflow-container").html() == '') {
            $('#privacy-policy-ajax .uk-position-cover').show();
            $.ajax({
                'url': '/privacy-policy',
                'success': function (data) {
                    $('#privacy-policy-ajax .uk-position-cover').hide();
                    $("#privacy-policy-ajax .uk-overflow-container").html(data);
                }
            });
        }
        var modal = UIkit.modal("#privacy-policy-ajax", {'modal' : false});
       modal.show();
       return false;
   }
});

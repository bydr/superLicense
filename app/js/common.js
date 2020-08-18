$(function () {

    // Custom JS
    var menuPopup = $('.mobile-menu');

    $(".mobile-menu__btn").on("click", function () {
        if (menuPopup.hasClass('is-active')) {
            $('body, html').removeClass('mobile-menu__showed');
            menuPopup.removeClass('is-active');
        } else {
            $('body, html').addClass('mobile-menu__showed');
            menuPopup.addClass('is-active');
        }
        return false;
    });

    // $(document).on('click', function(e){
    //     if (!$(e.target).closest('.menu').length){
    //         $('body').removeClass('body_pointer');
    //         $menu_popup.slideUp(300);
    //     }
    // });

    $('.website-sections__price').matchHeight();
    $('.website-sections__title').matchHeight();
    $('.website-sections__item').matchHeight();
    $('.list-panel__item').matchHeight();
    $('.service-item__title').matchHeight();
    $('.material-item').matchHeight();


    /* выбор элемент из списка  (образование) */
    let listItems = $('.list-selection-js .list-selection__item');
    let listItemSelected = ".list-selection__item-selected";

    listItems.on('click', function () {
        if ($(this).hasClass('selected')) {
            return;
        }

        $(this)
            .closest('.list-selection-js')
            .find('.list-selection__item').removeClass('selected')
            .find(listItemSelected).remove();

        let itemValue = $(this).find('.list-selection__item-inner').text().replace("→", "");
        $(this).append(getSectionSelectedItem(itemValue));
        $(this).addClass('selected');


    });

    function getSectionSelectedItem(value) {
        return `
        <div class="list-selection__item-selected bg-accent__darker">
            <p class="list-selection__selected-title dr-text__normal mb-0"><b>${value}</b></p>
            <div class="dr-btn-group">
                <label class="checkbox checkbox-btn">
                    <input type="checkbox" checked>
                    <span class="checkbox-inner">
                        <span class="checkbox-box">
                        
                        <svg class="checkbox-svg__active" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 11L12 14L22 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg class="checkbox-svg__disabled" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="18" height="18" rx="3" stroke="#17343E" stroke-width="2"/>
                        </svg>


                        </span>
                        <span class="checkbox-text dr-text__small">Сертификат</span>
                    </span>
                </label>
                <label class="checkbox checkbox-btn">
                    <input type="checkbox">
                    <span class="checkbox-inner">
                        <span class="checkbox-box">
                        
                        <svg class="checkbox-svg__active" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 11L12 14L22 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg class="checkbox-svg__disabled" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="18" height="18" rx="3" stroke="#17343E" stroke-width="2"/>
                        </svg>


                        </span>
                        <span class="checkbox-text dr-text__small">Стаж 3 года</span>
                    </span>
                </label>
            </div>
        </div>
    `;
    }

    /* выбор элемент из списка  (образование) */

    /* выбор элемент из списка (район/город) */
    let listItemsCustom = $('.list-selection-js-custom .list-selection__item');

    listItemsCustom.on('click', function () {
        if ($(this).hasClass('is-active')) {
            return;
        }

        $(this)
            .closest('.list-selection-js-custom')
            .find('.list-selection__item').removeClass('is-active');

        $(this).addClass('is-active');


    });
    /* выбор элемент из списка (район/город) */


    /* кастомный input[type="file"] */
    $('body').on('click', '.fl_default', function () {
        $(".fl_default").change(function () {
            var filename = "<p class='uploaded-file'>";
            filename += `Загружено 
                ${$(this)[0].files.length} 
                ${getEndgingWord($(this)[0].files.length, ['файл', 'файла', 'файлов'])}`;
            filename += "</p>";
            $(".fl_nm")
                .html(filename)
                .addClass("selected_file");
        });
    });

    function getEndgingWord(n, text_forms) {
        n = Math.abs(n) % 100;
        let n1 = n % 10;
        if (n > 10 && n < 20) {
            return text_forms[2];
        }
        if (n1 > 1 && n1 < 5) {
            return text_forms[1];
        }
        if (n1 === 1) {
            return text_forms[0];
        }
        return text_forms[2];
    }

    /* кастомный input[type="file"] */

    // $('.owl-carousel').owlCarousel();

    $('.review-carousel').owlCarousel({
        center: true,
        loop: false,
        margin: 60,
        autoWidth: false,
        nav: true,
        navText: ["<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M19 12H5\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M12 19L5 12L12 5\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg> ", "<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M5 12H19\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M12 5L19 12L12 19\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });

    let defaultClassesAlert = "alert msg-validate";
    $('#id-password, #id-confirm-password').on('keyup', function () {
        if ($('#id-password').val() === $('#id-confirm-password').val()) {
            $('.msg-validate')
                .html('Пароли совпадают')
                .removeClass()
                .addClass(`${defaultClassesAlert} alert-success`);
        } else
            $('.msg-validate')
                .html('Пароли не совпадают')
                .removeClass()
                .addClass(`${defaultClassesAlert} alert-danger`);
    });

    let content = $('.readmore-content');
    const maxHeightInitial = 1850;

    $(document).ready(function () {
        content
            .attr('initial-height', content.height())
            .css('max-height', `${maxHeightInitial}px`);
    });

    $('.readmore-btn').on('click', function (e) {
        e.preventDefault();
        $(this)
            .addClass('hide')
            .closest('.readmore')
            .find(content).css('max-height', `${content.attr('initial-height')}px`)
            .find('.readmore-overlay').css('opacity', 0);
    });

    $(document).ready(function () {
        // let serviceItems = $('.service-item');
        // serviceItems.each(function () {
        //     console.log($(this));
        //    let fullInfo = $(this).find('.service-item__show_active');
        //    fullInfo.attr('data-height', fullInfo.outerHeight());
        // });
    });

    /* раскрытие и скрытие service list */
    var serviceItemBtn = $('.service-item__toggle .dr-btn');
    serviceItemBtn.on('click', function (e) {
        e.preventDefault();
        let serviceItem = this.closest('.service-item');

        let btnTextDefault = "";
        btnTextDefault = $(this).text();
        $(this).text($(this).attr('btnTextAlternate'));
        $(this).attr('btnTextAlternate', btnTextDefault);

        console.log(serviceItem.offsetTop);

        let fullInfo = serviceItem.querySelector('.service-item__show_active');
        if (!serviceItem.classList.contains('is-active')) {
            serviceItem.classList.add('is-active');
            fullInfo.style.height = `${fullInfo.scrollHeight}px`;
        } else {
            serviceItem.classList.remove('is-active');
            fullInfo.style.height = '0';
        }

        window.pageYOffset -= fullInfo.scrollHeight;
    });

    let modalBtnClose = ".dr-modal__close";
    let activeClass = "is-active";

    /* открытие модалки по нажатию на кнопку */
    $("*[data-modal]").on('click', function (e) {
        e.preventDefault();
        drModalShow($(this));
    });

    /* закрытие модалки по нажатию на кнопку */
    $(modalBtnClose).on('click', function () {
        drModalHide($(this));
    });

    function drModalHide(context) {
        $(context).closest('.dr-modal').removeClass(activeClass);
        $('html').removeClass('o-hidden');
    }

    function drModalShow(currentTarget, overlayStatus = true) {
        let btnModalId = currentTarget.data('modal');
        let modal = `.dr-modal[id="${btnModalId}"]`;
        if (btnModalId) {
            $(modal).addClass(activeClass);
        }
        $(modal).find('.dr-modal__overlay').eq(0).css("opacity", overlayStatus ? "1" : "0");
        $('html').addClass('o-hidden');
    }

    $(".modal-cancel, #btn_deleteAccount").on("click", function () {
        drModalHide($(this));
    });

    const TIMER_DELETE_ACCOUNT = 10;
    var timerBlock = '.timer-seconds';
    var timerSeconds = 0;

    $(document).ready(function () {
        $(timerBlock).html(TIMER_DELETE_ACCOUNT);
    });

    $('#btn_deleteAccount').on('click', function () {
        var index = TIMER_DELETE_ACCOUNT;
        timerSeconds = setInterval(function () {
            $(timerBlock).html(index--);
            if (index < 0) {
                clearTimer(timerSeconds);
            }
        }, 1000);

    });

    $('.modal-cancel').on('click', function () {
        setTimeout(function () {
            clearTimer(timerSeconds);
        }, 200)
    });

    function clearTimer(timer) {
        clearInterval(timer);
        $(timerBlock).html(TIMER_DELETE_ACCOUNT);
    }

    $('.radio-group__wrapper').masonry({
        // options
        itemSelector: '.radio-group__item'
    });

    $('#id-year').mask('0000', {
        placeholder: 'XXXX',
        translation: {
            0: {
                pattern: /[0-9]/
            }
        }
    });
    $('.mask-date').mask('00.00.0000', {
        placeholder: '__ . __ . ____',
        translation: {
            0: {
                pattern: /[0-9]/
            }
        }
    });
    $('#id-tel-lead').mask("+0 000 000 0000", {placeholder: "+_ ___ ___ ____"});

    $('[data-toggle="popover"]').popover({
        template: '<div class="popover" role="tooltip"><span class="popover-close"></span><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    });
    // закрытие tooltip по нажатию на крестик
    $('body').on('click', '.popover-close', function () {
        $(`[aria-describedby=${$(this).closest('.popover').attr('id')}]`).click();
    });


    /*dropdown*/
    $(document).ready(function(){
        var dropdown = $(".dropdown-header");
        dropdown.on("click", function() {
            $(this).closest('.dropdown').toggleClass("active");
        });

        var dropdownHeader = $('.dropdown-nav');
        dropdownHeader.on('click', function (e) {
            e.preventDefault();
            let parent = $(this).closest('.dropdown-nav');
            if (parent.hasClass("active")) {
                parent.removeClass('active');
            } else {
                dropdownHeader.each(function () {
                    console.log( $(this).closest('.dropdown-nav'));
                    $(this).closest('.dropdown-nav').removeClass('active');
                });

                parent.addClass('active');
            }
        });
    });
    /*dropdown*/

    $('.controls-added__btn').on('click', function () {
        let addedElement =`<div class="controls-added__row"><div class="controls-added__element">${$(this)
            .closest('.controls-added__row_original')
            .find('.controls-added__element')
            .html()}</div></div>`;
        $(this)
            .closest('.controls-added')
            .append(addedElement);
    })

});

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

    listItems.on('click', function (e) {
            if ($(this).hasClass('selected')) {
                if ($(this).is(e.target) // если клик был по нашему блоку
                    && $(this).has(e.target).length === 0) { // и не по его дочерним элементам
                    $(this)
                        .removeClass('selected')
                        .find(listItemSelected).remove();
                }
            } else {
                let itemValue = $(this).find('.list-selection__item-inner').text().replace("→", "");

                // для каждого вида обучения (среднее, высшее) разный стаж
                if ($(this).closest('.list-selection-js').hasClass('education_higher')) {
                    $(this).append(getSectionSelectedItem(itemValue, 5));
                } else {
                    $(this).append(getSectionSelectedItem(itemValue, 3));
                }

                $(this).addClass('selected');
            }
    });

    function getSectionSelectedItem(value, experience) {
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
                        <span class="checkbox-text dr-text__small">Стаж ${experience} года</span>
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


    var pass = document.querySelector('#id-password');
    var passConfirm = document.querySelector('#id-confirm-password');
    if (pass && passConfirm) {
        pass.addEventListener('keyup', function () {
            comfirmPassword(this);
        });
        passConfirm.addEventListener('keyup', function () {
            comfirmPassword(this);
        });
    }

    function comfirmPassword(el) {
        let elemMsgConfirmPassword = passConfirm
                                        .closest('.form-group')
                                        .querySelector('.form-group__message');

        if(!passConfirm.validity.patternMismatch && !pass.validity.patternMismatch) {
            if (passConfirm.value === pass.value) {
                elemMsgConfirmPassword
                    .innerText = 'Пароли совпадают';
            } else
                elemMsgConfirmPassword
                    .innerText = 'Пароли не совпадают';
        } else {
            elemMsgConfirmPassword
                .innerText = passConfirm.getAttribute('title');
        }
    }

    // $('#id-password, #id-confirm-password').on('keyup', function () {
    //     let elemMsgConfirmPassword = $(this)
    //                                         .closest('.form-group')
    //                                         .find('.form-group__message');
    //     console.log($(this).pattern, $(this), elemMsgConfirmPassword);
    //
    //     if ($('#id-password').val() === $('#id-confirm-password').val()) {
    //         elemMsgConfirmPassword
    //             .html('Пароли совпадают');
    //     } else
    //         elemMsgConfirmPassword
    //             .html('Пароли не совпадают');
    // });

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

    /* раскрытие и скрытие service list js */
    /* var serviceItemBtn = $('.service-item__toggle .dr-btn');
    serviceItemBtn.on('click', function (e) {
        e.preventDefault();
        let serviceItem = $(this).closest('.service-item');

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
    }); */
    /* раскрытие и скрытие service list js */

    /* раскрытие и скрытие service list jquery */
    var serviceItemBtn = $('.service-item__toggle .dr-btn');
    serviceItemBtn.on('click', function (e) {
        e.preventDefault();
        let serviceItem = $(this).closest('.service-item');

        let btnTextDefault = "";
        btnTextDefault = $(this).text();
        $(this).text($(this).attr('btnTextAlternate'));
        $(this).attr('btnTextAlternate', btnTextDefault);

        let fullInfo = serviceItem.find('.service-item__show_active');
        if (serviceItem.hasClass("active")){
            serviceItem.removeClass('active');
            fullInfo.slideUp();
        } else {
            serviceItem.addClass('active');
            fullInfo.slideDown();
        }
    });
    /* раскрытие и скрытие service list jquery */

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

    $('.radio-group__masonry').masonry({
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
    $('.mask-tel').mask("+0 000 000 0000", {
        placeholder: "+_ ___ ___ ____",
        clearIfNotMatch: true
    });
    $('.mask-tel-registr').mask("+0 000 000 0000", {
        clearIfNotMatch: true
    });


    $('.mask-time').mask("Hh:Mm", {
        placeholder: "__ : __",
        translation: {
            'H': {
                pattern: /[0-2]/
            },
            'h': {
                pattern: /[0-9]/
            },
            'M': {
                pattern: /[0-5]/
            },
            'm': {
                pattern: /[0-9]/
            }
        },
        clearIfNotMatch: true,
        onComplete: function(val, currentField) {
            var arrTime = val.split(':');
            console.log(currentField);
            currentField.target.value = (parseInt(arrTime[0]) > 23)?"23:59":val;
        }
    });

    $('[data-toggle="popover"]').popover({
        template: '<div class="popover" role="tooltip"><span class="popover-close"></span><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    });
    // закрытие tooltip по нажатию на крестик
    $('body').on('click', '.popover-close', function () {
        $(`[aria-describedby=${$(this).closest('.popover').attr('id')}]`).click();
    });


    /*dropdown*/
    $(document).ready(function(){

        var dropdownHeaderDesktop = $('.dr-navbar > .dr-navbar-nav .dropdown-nav');
        var dropdownHeaderMobile = $('.mobile-menu .dropdown-nav');
        dropdownHeaderDesktop.on('mousemove', function (e) {
            e.preventDefault();
            $(this).addClass('active');
        });
        dropdownHeaderDesktop.on('mouseout', function () {
            $(this).removeClass('active');
        });

        dropdownHeaderMobile.on('click', function (e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                dropdownHeaderMobile.each(function () {
                    $(this).removeClass('active');
                });
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
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



    /* кастомный select */
    $(function () {
        $(document).on('click.simple-select', '.simple-select .simple-select__main', function (e) {
            let $dropdown = $(this).closest('.simple-select');

            $('.simple-select').not($dropdown).removeClass('is-active');
            $dropdown.toggleClass('is-active');
            if (e.originalEvent) {$dropdown.find('.focus').removeClass('focus'); return;}
            if ($dropdown.hasClass('is-active')) {
                $dropdown.find('.focus').removeClass('focus');
                if ($dropdown.find('.simple-select__item.is-active').length) {
                    $dropdown.find('.is-active').addClass('focus');
                } else {
                    $dropdown.find('.simple-select__item').first().addClass('focus');
                }
            } else {
                $dropdown.focus();
            }
        });
        $(document).on('click.simple-select', '.simple-select .simple-select__item:not(.is-active)', function (e) {
            let val = $(this).data('value');
            let select = $(this).closest('.simple-select');
            let text = $(this).html();

            select.removeClass('is-active');
            select.find('.simple-select__item').removeClass('is-active');
            select.find('.simple-select__selected').html(text);
            select.find('input').val(val).change();
            $(this).addClass('is-active').blur();//blur для закрытия списка, из-за стилей, которые позволяют открыть список при фокусе на эл. списка
        });
        $(document).on('click', function (e) {
            if (!$(e.target).closest('.simple-select').length) {
                $('.simple-select').removeClass('is-active');
            }
        });
        $(document).on('keydown.simple-select', '.simple-select', function(event) {
            let $dropdown = $(this);
            let $toggle = $dropdown.find('.simple-select__main');
            let $focused_option = $($dropdown.find('.focus') || $dropdown.find('.simple-select__item.is-active'));
            $focused_option.length === 0 ? $focused_option = $dropdown.find('.simple-select__item').first() : '';
            if (event.keyCode === 32 || event.keyCode === 13) {// Space or Enter
                if ($dropdown.hasClass('is-active')) {
                    $focused_option.trigger('click');
                } else {
                    $toggle.trigger('click');
                }
                return false;
            } else if (event.keyCode === 40) {// Down
                if (!$dropdown.hasClass('is-active')) {
                    $toggle.trigger('click');
                } else {
                    let $next = $focused_option.nextAll('.simple-select__item:not(.disabled)').first();
                    if ($next.length > 0) {
                        $dropdown.find('.focus').removeClass('focus');
                        $next.addClass('focus');
                    }
                }
                return false;
            } else if (event.keyCode === 38) {// Up
                if (!$dropdown.hasClass('is-active')) {
                    $toggle.trigger('click');
                } else {
                    var $prev = $focused_option.prevAll('.simple-select__item:not(.disabled)').first();
                    if ($prev.length > 0) {
                        $dropdown.find('.focus').removeClass('focus');
                        $prev.addClass('focus');
                    }
                }
                return false;
            } else if (event.keyCode === 27) {// Esc
                if ($dropdown.hasClass('is-active')) {
                    $toggle.trigger('click');
                }
            } else if (event.keyCode === 9) {// Tab
                if ($dropdown.hasClass('is-active')) {
                    return false;
                }
            }
        });
    });
});

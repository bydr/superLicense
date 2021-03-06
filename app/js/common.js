const MODAL_BTN_CLOSE = ".dr-modal__close";
const ACTIVE_CLASS = "is-active";

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
    let listItemClose = ".list-selection__item__close";

    $('body').on('click', listItemClose, function () {
        $(this)
            .closest('.list-selection__item')
            .removeClass('selected')
            .css('padding-bottom', 0)
            .find(listItemSelected)
            .remove();

        console.log($('.list-selection-js').find(listItemSelected).length);
        if(!$('.list-selection-js').find(listItemSelected).length) {
            $('.btn-next').addClass('dr-btn__disabled');
        }

    });
    listItems.on('click', function () {
        getToHtmlSelectedItem($(this));
    });
    function getToHtmlSelectedItem(element) {
        if (!element.hasClass('selected')) {
            var template = $('.list-selection__templates').html(),
                title = element.find('.list-selection__item-inner').text().replace("→", ""),
                expYear = element.data('year');
            template = template
                .replace('@value@', title)
                .replace('@experience_val@', expYear +" "+ getEndgingWord(expYear, ['год', 'года', 'лет']));
            element.append(template);
            element.css('padding-bottom',
                `${
                    element.find('.list-selection__item-selected').outerHeight()
                    -
                    element.find('.list-selection__item-inner').outerHeight()
                }px`)
                .addClass('selected');

            $('.dr-btn__disabled').removeClass('dr-btn__disabled');
        }
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
            .find('.list-selection__item')
            .removeClass('is-active');

        $(this).addClass('is-active');

        $('.dr-btn__disabled').removeClass('dr-btn__disabled');
    });
    /* выбор элемент из списка (район/город) */


    /* кастомный input[type="file"] */
    $('body').on('click', '.fl_upld__btn', function () {

        //при клике на кнопку Загрузить - выбрать соответствующий input file
        $(this)
            .closest('.fl_upld')
            .find(`input[data-id=${$(this).find('.fl_tracker').text()}]`).click();

    });

    $('body').on('click', '.fl_default', function () {
        $(".fl_default").change(function () {

            let $isError = $(this).closest('.field-uploadform-files');
            if ($(this).attr('aria-invalid')) {
                return;
            }

            var fieldList = $(this).closest('.fl_field__list'),
                fields = fieldList.find('input'),
                incDataId = fieldList.find('input').last().data('id') + 1,
                countAllFiles = 0;

            //дублирование поля
            //удаление класса _ex, очистка загруженных файлов
            //установка нового data-id
            fieldList
                .find('.fl_default_ex')
                .clone()
                .appendTo('.fl_field__list')
                .removeClass('fl_default_ex')
                .val("")
                .attr('data-id', incDataId);

            //обновление id кнопки в соответствии с id поля
            $(this).closest('.fl_upld')
                .find('.fl_tracker')
                .text(incDataId);

            // при загрузке второй раз - изменение названия кнопки, в последующие разы нет смысла менять
            let btnLabel = $(this).closest('.fl_upld').find('.fl_upld__btn_lbl');
            if(incDataId > 0 && incDataId < 2) {
                let temp = btnLabel.text();
                btnLabel.text(btnLabel.data('text-alternate'));
                btnLabel.attr('data-text-alternate', temp);
            }

            //количество загруженных файлов во всх инпутах
            fields.each(function() {
                countAllFiles += $(this)[0].files.length;
            });

            var filename = "<p class='uploaded-file'>";
            filename += `
                ${getEndgingWord(countAllFiles, ['Загружен', 'Загружено', 'Загружено'])}
                ${countAllFiles} 
                ${getEndgingWord(countAllFiles, ['документ', 'документа', 'документов'])}`;
            filename += "</p>";
            $(".fl_nm")
                .html(filename)
                .addClass("selected_file");
        });
    });
    /* кастомный input[type="file"] */




    // $('.owl-carousel').owlCarousel();

    var carouselReview = $('.review-carousel');
    carouselReview.on('initialize.owl.carousel initialized.owl.carousel', function (event) {
        reviewCountShow($(this), event);
    });
    carouselReview.owlCarousel({
        center: true,
        autoHeight: false,
        loop: false,
        margin: 60,
        // autoWidth: false,
        nav: true,
        navText: ["<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M19 12H5\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M12 19L5 12L12 5\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg> ", "<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M5 12H19\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M12 5L19 12L12 19\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>"],
        responsive: {
            0: {
                items: 1,
                autoHeight: true
            },
            768: {
                items: 2,
                autoHeight: false
            },
            992: {
                items: 2
            }
        }
    });
    carouselReview.on('changed.owl.carousel', function(event) {
        reviewCountShow($(this), event);
    });
    function reviewCountShow(el, e) {
        el
            .closest('.review-carousel__wrapper')
            .find('.review-carousel__pages')
            .html(`${e.item.index + 1} из ${e.item.count}`)
    }

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

    $(document).ready(function () {
        initialHeightReadmoreContent('.section-clients .readmore-content', 1850);
        initialHeightReadmoreContent('.section-ppk-preview-info .readmore-content', 950);
    });

    $('.readmore-btn').on('click', function (e) {
        e.preventDefault();
        showReadmoreContent($(this));
    });

    function initialHeightReadmoreContent(contentName, maxHeightInitial) {
        let content = $(contentName),
            contentHeight = content.height();
        content
            .attr('initial-height', contentHeight)
            .css('max-height', `${maxHeightInitial}px`);
        if (contentHeight <= maxHeightInitial) {
            content.closest('.readmore').find('.readmore-btn').addClass('hide');
        }
    }
    function showReadmoreContent(btn) {
        btn
            .addClass('hide')
            .closest('.readmore')
            .find('.readmore-content').css('max-height', `${$('.readmore-content').attr('initial-height')}px`)
            .find('.readmore-overlay').css('opacity', 0);
    }

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
    const MAX_HEIGHT_SERVICE_ITEM = 255;
    $(window).on('load', function () {
        $('.service-item').each(function () {
            let serviceItemContent = $(this).find('.service-item__content');
            serviceItemContent.attr('data-height', serviceItemContent.height());
            serviceItemContent.css('max-height', `${MAX_HEIGHT_SERVICE_ITEM}px`);
        });
    });
    serviceItemBtn.on('click', function (e) {
        e.preventDefault();
        let serviceItem = $(this).closest('.service-item');
        let serviceItemContent = serviceItem.find('.service-item__content');
        let heightItemContent = 0;

        /* вычисляем реальную высоту контента */
        serviceItemContent.children().each(function () {
            heightItemContent += $(this).outerHeight(true);
        });

        console.log(heightItemContent);

        /* меняем название кнопки */
        let btnTextDefault = "";
        btnTextDefault = $(this).text();
        $(this).text($(this).attr('btnTextAlternate'));
        $(this).attr('btnTextAlternate', btnTextDefault);

        /* скрываем или раскрываем блок */
        if (serviceItem.hasClass("active")){
            serviceItem.removeClass('active');
            serviceItemContent.css('max-height', `${MAX_HEIGHT_SERVICE_ITEM}px`)
        } else {
            serviceItem.addClass('active');
            serviceItemContent.css('max-height', `${heightItemContent}px`)
        }
    });
    /* раскрытие и скрытие service list jquery */



    /* открытие модалки по нажатию на кнопку */
    $("*[data-modal]").on('click', function (e) {
        e.preventDefault();
        drModalShow($(this).data('modal'));
    });

    /* закрытие модалки по нажатию на кнопку */
    $(MODAL_BTN_CLOSE).on('click', function () {
        drModalHide($(this));
    });

    $(".modal-cancel, #btn_deleteAccount").on("click", function () {
        drModalHide($(this));
    });



    $(document).ready(function () {
        $(timerBlock).html(TIMER_DELETE_ACCOUNT);
    });

    // $('#btn_deleteAccount').on('click', function () {
    //     startTimerSeconds();
    // });
    // $('a[data-modal="modal_thanks"]').on('click', function () {
    //     startTimerSeconds();
    // });

    $('.modal-cancel').on('click', function () {
        setTimeout(function () {
            clearTimer(timerSeconds);
        }, 200);
    });

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
        clearIfNotMatch: true,
        translation: {
            0: {
                pattern: /[0-9]/
            }
        }
    });
    $('.mask-tel, .mask-tel-registr').mask("+0 000 000 0000", {
        placeholder: "+_ ___ ___ ____",
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

    /*dropdown*/
    $(document).ready(function(){

        var dropdownHeaderDesktop = $('.dr-navbar > .dr-navbar-nav .dropdown-nav');
        var dropdownHeaderMobile = $('.mobile-menu .dropdown-nav');

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.dropdown-nav').length) {
                dropdownHeaderMobile.each(function () {
                    if( $(this).hasClass('active')) {
                        $(this).removeClass('active');
                    }
                });
            }
        });

        dropdownHeaderDesktop.on('mousemove', function (e) {
            e.preventDefault();
            $(this).addClass('active');
        });
        dropdownHeaderDesktop.on('mouseout', function () {
            $(this).removeClass('active');
        });

        $('.mobile-menu .dropdown-header').on('click', function (e) {
            e.preventDefault();
            var parent = $(this).closest('.dropdown-nav');
            if (!parent.hasClass('active')) {
                dropdownHeaderMobile.each(function () {
                    $(this).removeClass('active');
                });
                parent.addClass('active');
            } else {
                parent.removeClass('active');
            }
        });

    });
    /*dropdown*/

    $('body').on('click', '.controls-btn_add', function () {
        addControlsRow($(this));
    });
    $('body').on('click', '.controls-btn_remove', function () {
        removeControlsRow($(this));
    });



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

    /*аккордион - раскрывающийся список*/
    $(".toggle-header").each(function(){
        $(this).on("click", function() {

            var elToggle = $(this).closest(".toggle");
            elToggle.toggleClass("active");

            var elContentTgl = $(this).next();

            if (elToggle.hasClass("active")){
                elContentTgl.slideDown();
            } else {
                elContentTgl.slideUp();
            }

        });
    }); //кнопка
    /*аккордион - раскрывающийся список*/

    var $inactiveLink = $('.inactive-link');
    var $inactiveHtml = `Требуется авторизация. Пожалуйста, зарегистрируйтесь на сайте`;

    $(document).ready(function () {
        $inactiveLink.attr('data-toggle', 'popover')
            .attr('data-html', 'true')
            .attr('data-placement', 'top')
            .attr('data-content', $inactiveHtml);
    });

    $('[data-toggle="popover"]').popover({
        template: '<div class="popover" role="tooltip"><span class="popover-close"></span><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    });
    // закрытие tooltip по нажатию на крестик
    $('body').on('click', '.popover-close', function () {
        $(`[aria-describedby=${$(this).closest('.popover').attr('id')}]`).click();
    });

    $(window).on('load resize', function () {
        if ($(this).width() > 768) {
            $inactiveLink.on('mousemove', function (e) {
                e.preventDefault();
                tltpLinkShow($(this));
            });
            $inactiveLink.on('mouseout', function (e) {
                e.preventDefault();
                tltpLinkHide($(this));
            });
            $inactiveLink.on('click', function (e) {
                e.preventDefault();
            });
        } else {
            $inactiveLink.on('click', function (e) {
                e.preventDefault();
                if (!$(this).hasClass('hovered')) {
                    $(this).popover('show');
                    $(this).addClass('hovered');
                } else {
                    $(this).removeClass('hovered');
                    $(this).popover('hide');
                }
            });
        }
    });

    $('body').on('click', ".list-selection__item-selected .checkbox:first-child input[type='checkbox']", function () {
        let checkboxBtn = $(this).closest('.checkbox');
        if ($(this).prop('checked')) {
            checkboxBtn.addClass('checkbox_checked');
        } else {
            checkboxBtn.removeClass('checkbox_checked');
            checkboxBtn
                .siblings('.checkbox')
                .find("input[type='checkbox']")
                .prop('checked', false);
        }

    });
});


function tltpLinkShow(el) {
    if (!el.hasClass('hovered')) {
        el.popover('show');
        el.addClass('hovered');
    }
}
function tltpLinkHide(el) {
    el.removeClass('hovered');
    el.popover('hide');
}
function drModalHide(context) {
    $(context).closest('.dr-modal').removeClass(ACTIVE_CLASS);
    $('html').removeClass('o-hidden');
}

function drModalShow(idNameModal, overlayStatus = true) {
    let modal = `.dr-modal[id="${idNameModal}"]`;
    if (modal) {
        $(modal)
            .addClass(ACTIVE_CLASS)
            .find('.dr-modal__overlay').eq(0).css("opacity", overlayStatus ? "1" : "0");
    }
    $('html').addClass('o-hidden');
}
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

const TIMER_DELETE_ACCOUNT = 10;
const timerBlock = '.timer-seconds';
var timerSeconds = 0;

function startTimerSeconds(callbackFunc) {
    var index = TIMER_DELETE_ACCOUNT;
    timerSeconds = setInterval(function () {
        $(timerBlock).html(index--);
        if (index < 0) {
            clearTimer(timerSeconds);
            callbackFunc();
        }
    }, 1000);
}

function clearTimer(timer) {
    clearInterval(timer);
    $(timerBlock).html(TIMER_DELETE_ACCOUNT);
}

function addControlsRow(element) {
    let addedElement =`<div class="controls-added__row">
            ${element
        .closest('.controls-added__row_original')
        .html()}</div>`;
    element
        .closest('.controls-added')
        .append(addedElement);
    $('.controls-added__row:not(.controls-added__row_original):last-child').find('.controls-btn_add').remove();
}
function removeControlsRow(element) {
    element.closest('.controls-added__row').remove();
}

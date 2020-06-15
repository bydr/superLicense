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
    $('.material-item').matchHeight();


    /* выбор элемент из списка  */
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
    /* выбор элемент из списка 2 */
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
    /* выбор элемента из списка 2 */


    /* кастомный input[type="file"] */
    $('body').on('click', '.fl_default', function () {
        $(".fl_default").change(function(){
            var filename = "<ul class='uploaded-file'>";
                filename += `Загружено 
                ${$(this)[0].files.length} 
                ${ getEndgingWord($(this)[0].files.length, ['файл', 'файла', 'файлов'])}`;
            filename += "</ul>";
            $(".fl_nm")
                .html(filename)
                .addClass("selected_file");
        });
    });

    function getEndgingWord(n, text_forms) {
        n = Math.abs(n) % 100;
        let n1 = n % 10;
        if (n > 10 && n < 20) { return text_forms[2]; }
        if (n1 > 1 && n1 < 5) { return text_forms[1]; }
        if (n1 === 1) { return text_forms[0]; }
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
        navText: ["<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M19 12H5\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M12 19L5 12L12 5\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg> ","<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M5 12H19\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M12 5L19 12L12 19\" stroke=\"#006064\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>"],
        responsive:{
            0:{
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

});

<div class="modal" id="callback" data-width="500px">
    <div class="modal-body">
        <div class="modal-header">
            <div class="modal-close"><a href="#" data-action="close">Закрыть</a></div>
            AVDEEV VASILY
        </div>
    </div>
    <div class="modal-content">
        <?php echo do_shortcode( '[contact-form-7 id="45" title="Форма обратной связи"]' ); ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($){
        var animation = {
            open: {height: 'toggle'}, // jQuery animate function property object
            close: {height: 'toggle'}, // jQuery animate function property object
            easing: 'swing', // easing
            speed: 500 // opening & closing animation speed
        };
        var placement = 'topRight';
        var timeout = 1500;
        $(".wpcf7").on('wpcf7:mailsent', function(){
            noty({
                text: 'Письмо успешно отправлено! Мы обязательно Вам ответим.',
                layout: placement,
                type: 'success',
                animation: animation,
                timeout: timeout
            });
        }).on('wpcf7:mailfailed', function(){
            noty({
                text: 'При отправке письма произошла ошибка! Перезагрузите страницу и попробуйте снова.',
                layout: placement,
                type: 'error',
                animation: animation,
                timeout: timeout
            });
        }).on('wpcf7:spam', function(){
            noty({
                text: 'Ваше письмо очень похоже на спам. Измените текст и попробуйте снова.',
                layout: placement,
                type: 'warning',
                animation: animation,
                timeout: timeout
            });
        }).on('wpcf7:invalid', function(){
            noty({
                text: 'Не верные параметры отправки.',
                layout: placement,
                type: 'error',
                animation: animation,
                timeout: timeout
            });
        });
    });
</script>
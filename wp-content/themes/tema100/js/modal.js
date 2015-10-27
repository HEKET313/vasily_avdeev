(function($){
    $.fn.extend({
        modal: function(action){
            var modal = $(this);
            if(!modal.hasClass('modal')) {
                console.error('This object is not modal');
                return false;
            }
            var fade = $('.modal-fade');
            switch (action){
                case 'show':
                    hideAll();
                    if(fade.length == 0) {
                        fade = $('<div class="modal-fade"></div>');
                        $('body').prepend(fade);
                    }
                    $(window).resize(function(){
                        setPosition(modal);
                    });
                    modal.find('a[data-action="close"]').click(function(e){
                        e.preventDefault();
                        $(this).parents('.modal').modal('hide');
                    });
                    fade.click(hideAll);
                    fade.show();
                    modal.show();
                    setPosition(modal);

                    function setPosition(modal){
                        modal.css({
                            top: ($(window).height() - modal.height())/2,
                            left: ($(window).width() - modal.width())/2
                        });
                    }

                    break;
                case 'hide':
                    fade.hide();
                    modal.hide();
                    break;
            }

            function hideAll(){
                $('.modal').modal('hide');
            }
        }
    });
    $(document).ready(function(){
        $('a[data-action="show-modal"]').click(function(e){
            e.preventDefault();
            var id = $(this).attr('href');
            $(id).modal('show');
        });
    });
})(jQuery);
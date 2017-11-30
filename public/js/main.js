$( document ).ready(function() {

    $('.add').click(function () {
        $('.add_form').removeClass('hidden');
        $('.add').addClass('hidden');
    });

    $('.cancel').click(function (e) {
        e.preventDefault();
        $('.add_form').addClass('hidden');
        $('.add').removeClass('hidden');
    });

    $('.add_phone').click(function (e) {
        e.preventDefault();
        var clone = $(this).parent().find('.phone').last().clone();
        var index = clone.find('.phone_input').attr('name').slice(5);
        if(index == 10) return false;
        clone.find('.phone_input').attr('name', 'phone' + (parseInt(index) + 1));
        clone.find('.phone_input').val('');
        $(clone).insertAfter($('.phone').last());
    })
});
$(function() {
    setTimeout(function() {
        $('textarea').css('color', '#EDF2F7');
        console.log('textarea colors fixed');
    }, 2000);

    $('#toggle-navigation').click(function() {
        $('#sidebar').toggleClass('max-md:hidden');
    });
});

$(function() {
    function ScrollToItem(menuItem, target) {
        $(`${menuItem}`).click(() => {
            var ref = target
            var offset = $(ref).offset().top

            // scroll to the target
            $('html, body').animate({
                scrollTop: offset
            })
        })
    }
})
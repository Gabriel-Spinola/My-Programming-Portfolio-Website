$(function () {
    function Click() {
        //$('.item-home').addClass('active')

        function setActivity(target) { 
            $(target).click(() => {
                if (!$(target).hasClass('active')) {
                    if ($('.nav-item, .list-group-item').hasClass('active')) {
                        $('.nav-item, .list-group-item').removeClass('active')
    
                        $(target).addClass('active')
                    }
                    else {
                        $(target).addClass('active')
                    }
                }
            })

            return false
        }

        setActivity('.item-home')
        setActivity('.item-addMember')
        setActivity('.item-memberList')
        setActivity('.item-extra')
    }

    function ScrollToItem() { 
        if ($('target').length > 0) {
            // the element exists, so we need scroll to an element.
            var element = `#${ $('target').attr('target') }`
    
            var divScroll = $(element).offset().top
    
            $('html, body').animate({
                scrollTop: divScroll
            }, 2000)
        }
    }

     Click()
    ScrollToItem()

    // 'li.nav-item', 'li.list-group-item', '.panel-default'
})
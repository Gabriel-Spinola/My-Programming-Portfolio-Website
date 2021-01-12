$(function () {
    function Click() {
        $('.item-home').addClass('active')

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

                return false
            })
        }

        setActivity('.item-home')
        setActivity('.item-addMember')
        setActivity('.item-memberList')
        setActivity('.item-extra')
    }

    function ScrollToItem() { 
        function roll(menuItem, target) {
            $(`${menuItem}`).click(() => {
                var ref = target
                var offset = $(ref).offset().top

                $('html, body').animate({
                    scrollTop: offset
                })
            })
        }

        roll('.item-home', '#home')
        roll('.item-addMember', '#addMember')
        roll('.item-memberList', '#memberList')
        roll('.item-extra', '#extra')
    }

    function AutoCloseNavMenu() {
        if ($(window)[0].innerWidth <= 768) {
            $('.nav-item').click(() => {
                $('.navbar-toggler').click()
            })
        }
    }

    function DeleteMember() {
        $('button.delete-member').click(() => {
            var memberId = $(this).attr('member_id')

            console.log(memberId);
        })
    }

    AutoCloseNavMenu()
    Click()
    ScrollToItem()
})
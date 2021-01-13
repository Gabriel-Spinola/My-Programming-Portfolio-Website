$(function () {
    function Click() {
        // default active item
        $('.item-home').addClass('active')

        function setActivity(target) {
            $(target).click(() => {
                // remove and add classes to define which item is active
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

        // Bug Solve
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

                // scroll to the target
                $('html, body').animate({
                    scrollTop: offset
                })
            })
        }
        
        // Bug Solver
        roll('.item-home', '#home')
        roll('.item-addMember', '#addMember')
        roll('.item-memberList', '#memberList')
        roll('.item-extra', '#extra')
    }

    function AutoCloseNavMenu() {
        // Mobile Navbar toggle menu auto close when select something
        if ($(window)[0].innerWidth <= 768) {
            $('.nav-item').click(() => {
                $('.navbar-toggler').click()
            })
        }
    }

    // When creating this function, I had already fixed the jQuery bug, so I used the "attr" function (:.
    function DeleteMember() {
        $('button.delete-member').click(function () {
            var member_id = $(this).attr('member_id')
            var element = $(this).parent().parent()

            // Send the deleted member ID to the backend 
            // and start the fade-out animation
            $.ajax({
                method: 'post',
                data: {
                    'member_id': member_id
                },
                url: 'delete.php'
            }).done(function () {
                element.fadeOut(function () {
                    element.remove()
                })
            })
        })
    }

    DeleteMember()
    AutoCloseNavMenu()
    Click()
    ScrollToItem()
})
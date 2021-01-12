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

    function ScrollToItem(target1, target2) { 
        $(target1, target2).click(() => {
            var ref = $(target1, target2).attr('class')

            // var offset = $(ref).offset().top

            alert(ref)
        })
    }

    Click()
    ScrollToItem('.nav-item', '.list-group-item')
})
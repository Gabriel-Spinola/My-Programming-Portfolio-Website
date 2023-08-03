$(function() {
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
})
$(function () {
    function Click() {
        $('.navbar-menu a, .list-group-item a').click(() => {
            var attribute = $(this).attr()

            console.log(attribute)

            // don't refresh the page.
            return false
        })
    }

    Click()
})
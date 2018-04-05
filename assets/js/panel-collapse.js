$(document).on('click', '.card-header span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('card-collapsed')) {
        $this.parents('.card').find('.card-body').slideUp();
        $this.addClass('card-collapsed');
        $this.find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
    } else {
        $this.parents('.card').find('.card-body').slideDown();
        $this.removeClass('card-collapsed');
        $this.find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
    }
});
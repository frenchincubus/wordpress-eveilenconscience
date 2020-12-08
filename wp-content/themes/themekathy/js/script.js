var menuDropdown = () => {
   $('#barnav').toggle(function() {
    $('#barnav').css('visibility', 'visible');
    $('#span').toggleClass('glyphicon glyphicon-option-horizontal');
    $('#span').toggleClass('glyphicon glyphicon-option-vertical');
   
});
};
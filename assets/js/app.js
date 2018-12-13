$("#menu-toggle").click(function(e){
    e.prevenDefault();
    $("#wrapper").toggleClass("toggled");
});
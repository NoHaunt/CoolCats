$(".box input").on("focus",function(){
    $(this).addClass("focus");
});
$(".box input").on("blur",function(){
    if($(this).val()=="")
    $(this).removeClass("focus");
})

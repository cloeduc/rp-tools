/* Calcul des aptitudes */

function calculCompetence() {
    var count = 0; 
    $('.common_skill input').each(function() {
        count = count + parseInt($(this).val());
    });
    $('.special_skill input').each(function() {
        count = count + (parseInt($(this).val())*2);
    });
    $('.awsome_skill input').each(function() {
        count = count + (parseInt($(this).val())*3);
    });
    $('#total-magics').html(count);
}
    
function calculAptitude(aptitude) {
    var count = 0; 
    $('.aptitude-'+aptitude+' input').each(function() {
    count = count + parseInt($(this).val());
    $('#total-'+aptitude).html(count);
});
}
function calculAptitudes()
{
    calculAptitude('caractere');
    calculAptitude('physique');
    calculAptitude('social');
    calculCompetence();
}
$(".progress-input").submit(function(){return false;});
$(".progress-input").focus(function(){
    this.select();
});
$(".progress-input").change(function(){
    var value = $(this).val();
    $(this).parent().parent(".progress-bar").css("width", value+"%");
    $(this).parent().parent(".progress-bar").attr("aria-valuenow", value);
    calculAptitudes();
    return false;
});
$("#character-generals-informations input").each(function(){
    var string = $(this).val();
    if($(this).parent().attr("id")!= "input-job"){
    $(this).css("width", string.length*19+"px");        
    }
});
calculAptitudes();
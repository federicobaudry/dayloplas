
function iniciarsesion() {
    contra = document.getElementById('contraini').value;
    dni = document.getElementById('dniini').value;
    $.post('modulo_login.php', {contra: contra, dni:dni},  function(data){
        if(data=="si"){
            location.reload();
        }else{
            console.log(data);
        };
    });
};

function register() {
    dni = document.getElementById('dnireg').value;
    nomyape = document.getElementById('nomyape').value;
    tel = document.getElementById('tel').value;
    contra = document.getElementById('contrareg').value;
    $.post('modulo_register.php', {dni: dni, nomape: nomyape, tel: tel, contra: contra});
};
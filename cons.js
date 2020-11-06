$(document).on('click','.cons',function(){
    location.assign("sobre-nosotros.php")
});

$("#cargarmatri").click(function(){
    matricula=document.getElementById('matricula').value;
    $.post("subir_matricula.php", {matri:matricula}, function(Data){
        if(Data == "si"){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              });
              
              Toast.fire({
                icon: 'success',
                title: 'matricula cargada'
              });
              location.reload();
        }else{
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              });
              
              Toast.fire({
                icon: 'error',
                title: 'error'
              });
              Location.reload();
        };
    });
});

$(document).ready(function(){
    cargartodo();
});
  
function cargartodo(){
    $("#marcas").load("footmarca.php");
    $("#cursos").load("footcurso.php");
}
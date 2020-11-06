$( "#loadprove" ).click(function() {
  nombre=document.getElementById('nombre').value;
  correo=document.getElementById('correo').value;
  tel=document.getElementById('tel').value;
  marca=document.getElementById('marca').value;
  $.post('cargar_proveedor.php', {nombre:nombre, correo:correo, tel:tel, marca:marca});
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
    title: 'Proveedor agregado exitosamente'
  });
  cargartodo();
});

$( "#loadmarca" ).click(function() {
  nombre=document.getElementById('nombremarca').value;
  $.post('cargar_marca.php', {nombre:nombre});
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });
  Toast.fire({
    icon: 'success',
    title: 'Marca agregado exitosamente'
  });
  cargartodo();
});

$("#eliprove").click(function(){
  proveeli=document.getElementById("provedoreli").value;
  Swal.fire({
    title: '¿Seguro que quieres eliminar este proveedor?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Eliminar`,
    denyButtonText: `No eliminar`,
    confirmButtonColor: '#d33',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Eliminado!', '', 'success')
      $.post('eliminar_provedor.php', {prov:proveeli});
      cargartodo();
    } else if (result.isDenied) {
      Swal.fire('El proveedor no ha sido eliminado', '', 'info')
      cargartodo();
    }
  })
});

$("#elicurso").click(function(){
  cursoeli=document.getElementById("cursoeli").value;
  Swal.fire({
    title: '¿Seguro que quieres eliminar este curso?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Eliminar`,
    denyButtonText: `No eliminar`,
    confirmButtonColor: '#d33',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Eliminado!', '', 'success')
      $.post('eliminar_curso.php', {curso:cursoeli});
      cargartodo();
    } else if (result.isDenied) {
      Swal.fire('El curso no ha sido eliminado', '', 'info')
      cargartodo();
    }
  })
});

$(document).on('click','.eliminar',function(){
  id=$(this).data('id');
  Swal.fire({
    title: '¿Seguro que quieres eliminar este producto?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Eliminar`,
    denyButtonText: `No eliminar`,
    confirmButtonColor: '#d33',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Eliminado!', '', 'success')
      $.post('eliminar_producto.php',{id:id}, function(){
        cargartodo();
      });
    } else if (result.isDenied) {
      Swal.fire('El producto no ha sido eliminado', '', 'info')
      cargartodo();
    }
  })
  
  
});

$(document).on('click','.no',function(){
  id=$(this).data('id');
  Swal.fire({
    title: '¿Sigue teniendo cupo este curso?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `No`,
    denyButtonText: `Si`,
    confirmButtonColor: '#d33',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('disp_no.php',{id:id}, function(){
        cargartodo();
      });
    } else if (result.isDenied) {
      Swal.fire('El curso sigue estando disponible', '', 'info')
      cargartodo();
    }
  });
});

$(document).on('click','.si',function(){
  id=$(this).data('id');
  Swal.fire({
    title: '¿Quieres abrir la inscripcion de este curso?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Si`,
    denyButtonText: `No`,
    confirmButtonColor: '#d33',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('disp_si.php',{id:id}, function(){
        cargartodo();
      });
    } else if (result.isDenied) {
      Swal.fire('El curso sigue estando disponible', '', 'info')
      cargartodo();
    }
  })
});

$(document).on('click','.admin',function(){
  id=$(this).data('id');
  Swal.fire({
    title: '¿Quieres que no sea mas un Administrador?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Basico`,
    denyButtonText: `Matriculado`,
    confirmButtonColor: '#3085d6',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('tipo_basico.php', {id:id}, function(){
        cargartodo();
        location.reload();
      });
    } else if (result.isDenied) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('tipo_matri.php', {id:id}, function(){
        cargartodo();
        location.reload();
      });
    }
  });
});

$(document).on('click','.matriculado',function(){
  id=$(this).data('id');
  Swal.fire({
    title: '¿Quieres que no sea mas un Matriculado?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Basico`,
    denyButtonText: `Administrador`,
    confirmButtonColor: '#3085d6',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('tipo_basico.php', {id:id}, function(){
        cargartodo();
        location.reload();
      });
    } else if (result.isDenied) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('tipo_admin.php', {id:id}, function(){
        cargartodo();
        location.reload();
      });
    }
  });
});

$(document).on('click','.basico',function(){
  id=$(this).data('id');
  Swal.fire({
    title: '¿Quieres que no sea mas un Usuario Corriente?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Administrador`,
    denyButtonText: `Matriculado`,
    confirmButtonColor: '#3085d6',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('tipo_admin.php', {id:id}, function(){
        cargartodo();
        location.reload();
      });
    } else if (result.isDenied) {
      Swal.fire('Cambiado!', '', 'success')
      $.post('tipo_matri.php', {id:id}, function(){
        cargartodo();
        location.reload();
      });
    }
  });
});

$("#elimarca").click(function(){
  marca=document.getElementById("marcaeli").value;
  Swal.fire({
    title: '¿Seguro que quieres eliminar esta marca?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: `Eliminar`,
    denyButtonText: `No eliminar`,
    confirmButtonColor: '#d33',
    denyButtonColor: '#3085d6',
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Eliminado!', '', 'success')
      $.post('eliminar_marca.php', {marca:marca});
      cargartodo();
    } else if (result.isDenied) {
      Swal.fire('La marca no ha sido eliminado', '', 'info')
      cargartodo();
    }
  })
});

$(document).ready(function(){
  cargartodo();
});

function cargartodo(){
  $("#provedor").load("selectprovedor.php");
  $("#provedoreli").load("selectprovedor.php");
  $("#cursoeli").load("selectcurso.php");
  $("#marca").load("selectmarca.php");
  $("#marcaeli").load("selectmarca.php");
  $('#curso').load("tablacurso.php");
  $('#curos').load("tablacurso2.php");
  $("#resu").load("tablacargar.php");
  $("#elimi").load("tablaeli.php");
  $("#prov").load("tablaprove.php");
  $("#usu").load("tablausuario.php");
  $("#matri").load("tablamatri.php")
};
  
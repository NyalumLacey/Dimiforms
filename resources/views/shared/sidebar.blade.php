<div class="sidebar float-left" id="sidebar">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <div class="text-center">
         <img src="https://www.w3schools.com/w3images/avatar6.png" class="avatar mx-auto" SameSite="None">
         <h6>@yield('User-name')</h6>
   </div>
   <hr>
   <div class="items-container">
      <a href="{{ route('display_usuario')}}" >
         <h6 class="menu-item"><i class="fa fa-user-circle" aria-hidden="true"></i>   |     Cuenta</h6>
      </a>
      <a href="formularios">
         <h6 class="menu-item"><i class="fa fa-book" aria-hidden="true"></i>   |     Formularios</h6>
      </a>
      <a href="estadisticas">
         <h6 class="menu-item"><i class="fa fa-bar-chart" aria-hidden="true"></i>   |     Estadisticas</h6>
      </a>
      <a class="dropdown-toggle dropdown items-container" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="sidebar-dropdown">
         <h6 class="menu-item"><i class="fas fa-laptop-code"></i>   |     Dimiforms</h6>
         <div class="dropdown-menu" id="sidebar-dropdown" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{ route('display_crear_formulario')}}" data-toggle="modal" data-target="#modal-crear">Crear Formulario</a>
            <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('display_editar_formulario')}}" data-toggle="modal" data-target="#modal-editar">Editar Formulario</a>
         </div>
      </a>
      <hr>
      <a href="about">
         <h6 class="menu-item"><i class="fa fa-info-circle" aria-hidden="true"></i>   |     Acerca de</h6>
      </a>
   </div>


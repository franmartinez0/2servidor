<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Bingo!!!!!</span>
      </a>

      
    </header>
  
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>





<form class="user" action="controlador.php" method="post">

<div class="form-group" width="50%">
    <p>Introduce el numero de jugadores</p>
    <input type="text" class="form-control form-control-user"
        id="jugadores" aria-describedby="emailHelp"
        placeholder="jugadores" name="jugadores">
</div>


    
<button type="submit"  name="empezar" class="btn btn-primary btn-user btn-block"  value="empezar">
    iniciar partida
</button>
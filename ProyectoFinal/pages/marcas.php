


<!doctype html>
                    <html>
                        <head>
                            <link rel="stylesheet" type="text/css" href="tablestyles.css">

                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Tienda de abarrotes</title>
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                                <style>::-webkit-scrollbar {
    width: 8px;
  }
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  } @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #7357E4;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}</style>
  
                              </head>


                            <body className='snippet-body'>
                                <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="#" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="snippets.html" class="nav_logo">  <span class="nav_logo-name">Tienda de abarrotes</span> </a>
              <div class="nav_list"> <a href="snippets.html" class="nav_link"><i class="bi bi-house"></i>  <span class="nav_name">Inicio</span> </a> 
  
              <div class="nav_list"> <a href="productos.php" class="nav_link "> <i class="bi bi-bag-check"></i> <span class="nav_name">Productos</span> </a> 
                  <a href="marcas.php" class="nav_link active"> <i class="bi bi-shop"></i> <span class="nav_name">Marcas</span> </a> 
                  <a href="ventas.php" class="nav_link"> <i class="bi bi-tags"></i> <span class="nav_name">Venta</span> 
                </a> <a href="empleados.php" class="nav_link"><i class="bi bi-person-fill-lock"></i> <span class="nav_name">Empleados</span> </a> 
                  <a href="categorias.php" class="nav_link"> <i class="bi bi-collection-fill"></i> <span class="nav_name">Categoria</span> </a> 
                  <a href="reportes.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reportes</span> </a> 
                </div>
            </div> <a href="../login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesion</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-90 bg-light align-items-center">
        <h4>Marcas</h4>
        
<style>
html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.mask-custom {
  background: rgb(115, 87, 228);
  border-radius: 2em;
  backdrop-filter: blur(25px);
  border: 2px solid rgba(255, 255, 255, 0.05);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}
</style>
<?php
$colum;
$servername = "localhost";
$username = "root";
$password = "abc";
$dbname = "abarrote";

$conn = new mysqli($servername, $username, $password, $dbname);
//$consulta= "SELECT * FROM producto where status =1";
$consulta="Select * from marca WHERE statusmarca = 1";

        $result = mysqli_query($conn,$consulta);
  if(!$result) 
  {
      echo "No se ha podido realizar la consulta";
  }
echo'<section class="intro">
  <div class="" >
  <div class="mask d-flex align-items-center h-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mask-custom">
          <div class="card-body">
            <div class="table-responsive">
                  <table id="tablapedorra" class="table table-borderless text-white mb-0 bg-image h-100">
                    <thead>
                      <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Popularidad</th>
                        <th scope="col">Periodo de Entrega</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                        ';
                        
                        //prueba cambio 

while ($colum = mysqli_fetch_array($result))
{
                        
                   echo ' </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td><h3> '.$colum ['nombremarca'].'</h3></td>
                        <td><h3> '.$colum ['pais'].'  </h3></td>
                        <td><h2>'.$colum ['popularidad'].'</h2></td>
                        <td><h2>'.$colum ['periodoEntrega']. '</td><h2>
                        <td><form action="EliminarConfirmMar.php" method="POST"> 
                        <input type="hidden" name="id" value="'.$colum ['idMarca'].'">
                        <input class="btn btn-danger" type="submit" value="Eliminar" >
                        </form></h2></td>
                        <td><h2><form action="modMarca.php" method="post"> 
                        <input type="hidden" id="idid" name="id" value="'.$colum ['idMarca'].'">
                        <input type="hidden" id="idmod" name="modificagrega" value="Modificar">
                        <input type="hidden" id="idname" name="nombre" value="'.$colum['nombremarca'].'">
                        <input type="hidden" id="idprecio" name="precio" value="'.$colum['pais'].'">
                        <input type="hidden" id="idstock" name="stock" value="'.$colum['popularidad'].'">
                        <input type="hidden" id="idarea" name="area" value="'.$colum['periodoEntrega'].'">
                        <input class="btn btn-warning" type="submit" value="Modificar" >
                        </form></h2></td>
                       
                      </tr>   
                    
                    </tbody>';
                }
                
                mysqli_close( $conn );
                
?>

</table>
                  <form action="modMarca.php" method="post"> 
                        <input type="hidden" name="modificagrega" value="Agregar">
                        <input class="btn btn-success" type="submit" value="Agregar" >
                        </form>
                        

      
</section>
<h3>Exportar a ...</h3>
<div class="btn-group">
    <form action="../marcas/pdf.php" method="post">
        <input class="btn btn-success" type="submit" value="PDF">
    </form>
    <form action="../marcas/excel.php" method="post">
        <input class="btn btn-success" type="submit" value="Excel">
    </form>
    <form action="../marcas/csv.php" method="post">
        <input class="btn btn-success" type="submit" value="CSV">
    </form>
    <form action="../marcas/xml.php" method="post">
        <input class="btn btn-success" type="submit" value="XML">
    </form>
    <form action="../marcas/json.php" method="post">
        <input class="btn btn-success" type="submit" value="JSON">
    </form>
</div>
    </div>
    









































    
    <!--Container Main end-->
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
   
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>
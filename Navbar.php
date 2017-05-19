<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Listado Medicos</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Bienvenido</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Información <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Registro</a></li>
          </ul>
          <ul class="nav navbar-nav">
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Medicos</a></li>
              <li class="divider"></li>
              <li><a href="#">Ingresos</a></li>
              <li class="divider"></li>
              <li><a href="#">Pacientes</a></li>
            </ul>
          </li>
        </ul>
        <!--<div class="form-group">-->
        <ul class="nav navbar-nav navbar-form navbar-right" role="search">
            <input type="text" class="form-control" placeholder="Paciente | Medico">
              <button type="submit" class="btn btn-default">Buscar</button>
        </ul>
      </div>     
      </div>
    </div>
  </nav>

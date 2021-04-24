@extends('layouts.admin')
@section('contenu')
<div class="container-fluid" >
<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 text-gray-800">Statistics</h1>
</div>

<!-- Content Row -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
</section>

<!-- Content Row -->
<div class="row">

  <div class="col-lg-12 mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Site user guide</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{URL::asset('assets/images/undraw_posting_photo.svg')}}" alt="">
        </div>
        <ol class="guide-liste">
          <li>The menu on the left allows you to browse between all the features of the site.</li>
          <li>La section (Ajouter) vous permet de sélectionner les fichier pdf et xml et d'afficher les détails de vos résultats de téléchargement, pour que les résultats soient donc répartis selon l'état du fichier dans la barre d'état. Donc Vous devez cliquer sur « selectionner des fichiers » et Choisissez les fichiers (XML+pdf)</p>
          <li>L'interface des prélèvement vous permet d’afficher (le nom, prénom, la date, l’heure de prélèvement, le médecin et l’organisme) et de télécharger les résultats au format PDF du chaque patient.</li>
          <li>L'interface des médecins vous permet d’afficher la liste des médecins.</li>
          <li>L'interface des patients vous permet d’afficher la liste des patients.</li>
          <li>L'interface des sociétés vous permet d’afficher la liste des sociétés.</li>
          <li>L'interface des cliniques vous permet d’afficher la liste des cliniques.</li>
        </ol>
      </div>
    </div>

  </div>

</div>
</div>
@endsection
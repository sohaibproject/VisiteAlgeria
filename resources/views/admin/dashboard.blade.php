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
          <li>La section (Ajouter) vous permet de s??lectionner les fichier pdf et xml et d'afficher les d??tails de vos r??sultats de t??l??chargement, pour que les r??sultats soient donc r??partis selon l'??tat du fichier dans la barre d'??tat. Donc Vous devez cliquer sur ?? selectionner des fichiers ?? et Choisissez les fichiers (XML+pdf)</p>
          <li>L'interface des pr??l??vement vous permet d???afficher (le nom, pr??nom, la date, l???heure de pr??l??vement, le m??decin et l???organisme) et de t??l??charger les r??sultats au format PDF du chaque patient.</li>
          <li>L'interface des m??decins vous permet d???afficher la liste des m??decins.</li>
          <li>L'interface des patients vous permet d???afficher la liste des patients.</li>
          <li>L'interface des soci??t??s vous permet d???afficher la liste des soci??t??s.</li>
          <li>L'interface des cliniques vous permet d???afficher la liste des cliniques.</li>
        </ol>
      </div>
    </div>

  </div>

</div>
</div>
@endsection
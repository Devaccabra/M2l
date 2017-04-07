<link href="http://localhost/M2l/css/admin.css" rel="stylesheet">

<div class="page-content">
    <div class="row">

<div class="container">
  <div class="row">

    <div class="col-sm-6 col-md-offset-3">
      <div class="circle-tile ">
        <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Salariés </div>
          <div class="circle-tile-number text-faded "><?= $salarie['count(id_s)'] ?></div>
          <a class="circle-tile-footer" href="<?=BASE_URL?>/chef_add">Ajouter un salarié <i class="fa fa-chevron-circle-right"></i></a>
          <a class="circle-tile-footer" href="<?=BASE_URL?>/chef_supp">Supprimer un salarié <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</div>
        </div>
    </div>
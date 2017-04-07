<link href="http://localhost/M2l/css/admin.css" rel="stylesheet">

<div class="page-content">
    <div class="row">

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="circle-tile ">
        <div class="circle-tile-heading dark-blue"><i class="fa fa-list-ul fa-fw fa-3x"></i></div>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded"> Formations</div>
          <div class="circle-tile-number text-faded "><?= $formation['count(id_f)'] ?></div>
          <a class="circle-tile-footer" href="http://localhost/M2l/admin_add/1">Ajouter une formation <i class="fa fa-chevron-circle-right"></i></a>
          <a class="circle-tile-footer" href="http://localhost/M2l/admin_supp/1">Supprimer une formation <i class="fa fa-chevron-circle-right"></i></a>
          <a class="circle-tile-footer" href="http://localhost/M2l/admin_modif/1">Modifier une formation <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="circle-tile ">
        <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Salariés </div>
          <div class="circle-tile-number text-faded "><?= $salarie['count(id_s)'] ?></div>
          <a class="circle-tile-footer" href="http://localhost/M2l/admin_add/2">Ajouter un salarié <i class="fa fa-chevron-circle-right"></i></a>
          <a class="circle-tile-footer" href="http://localhost/M2l/admin_supp/2">Supprimer un salarié <i class="fa fa-chevron-circle-right"></i></a>
          <a class="circle-tile-footer" href="http://localhost/M2l/admin_modif/2">Modifier un salarié <i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
        <div class="circle-tile">
            <div class="circle-tile-heading green"><i class="fa fa-user fa-fw fa-3x"></i></div>
            <div class="circle-tile-content green">
                <div class="circle-tile-description text-faded"> Chefs </div>
                <div class="circle-tile-number text-faded "><?= $chef['count(id_s)'] ?></div>
                <a class="circle-tile-footer" href="http://localhost/M2l/admin_add/3">Ajouter un chef <i class="fa fa-chevron-circle-right"></i></a>
                <a class="circle-tile-footer" href="http://localhost/M2l/admin_supp/3">Supprimer un chef <i class="fa fa-chevron-circle-right"></i></a>
                <a class="circle-tile-footer" href="http://localhost/M2l/admin_modif/3">Modifier un chef <i class="fa fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>

      <div class="col-sm-4">
          <div class="circle-tile ">
              <div class="circle-tile-heading orange"><i class="fa fa-users fa-fw fa-3x"></i></div>
              <div class="circle-tile-content orange">
                  <div class="circle-tile-description text-faded"> Prestataires </div>
                  <div class="circle-tile-number text-faded "><?= $prestataire['count(id_p)'] ?></div>
                  <a class="circle-tile-footer" href="http://localhost/M2l/admin_add/4">Ajouter un prestataire <i class="fa fa-chevron-circle-right"></i></a>
                  <a class="circle-tile-footer" href="http://localhost/M2l/admin_supp/4">Supprimer un prestataires <i class="fa fa-chevron-circle-right"></i></a>
                  <a class="circle-tile-footer" href="http://localhost/M2l/admin_modif/4">Modifier un prestataires <i class="fa fa-chevron-circle-right"></i></a>
              </div>
          </div>
      </div>
  </div>
</div>
        </div>
    </div>
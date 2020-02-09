<main role="main" class="container">
    <div class="starter-template">
      <h1>Affichage de la liste des employés</h1>
    </div>

<!--
  8 =>
    object(stdClass)[13]
      public 'EmployeeID' => string '9' (length=1)
      public 'ContactID' => string '1005' (length=4)
      public 'NationalIDNumber' => string '695256908' (length=9)
      public 'ETitle' => string 'Design Engineer' (length=15)
      public 'CTitle' => string 'Ms.' (length=3)
      public 'FirstName' => string 'Gail' (length=4)
      public 'MiddleName' => string 'A' (length=1)
      public 'LastName' => string 'Erickson' (length=8)
      public 'EmailAddress' => string 'gail0@adventure-works.com' (length=25)
      public 'HireDate' => string '1998-02-06 00:00:00' (length=19)
-->

  <div class="row">
    <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Contact #</th>
        <th scope="col">National #</th>
        <th scope="col">Titre</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Poste</th>
        <th scope="col">Date Embauche</th>
        <th scope="col">Mail</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($employeelist as $e){ ?>
      <tr>
        <td><?php if (isset($e->EmployeeID)) echo $e->EmployeeID; ?></td>
        <td><?php if (isset($e->ContactID)) echo $e->ContactID; ?></td>
        <td><?php if (isset($e->NationalIDNumber)) echo $e->NationalIDNumber; ?></td>
        <td><?php if (isset($e->CTitle)) echo $e->CTitle; ?></td>
        <td><?php if (isset($e->LastName)) echo $e->LastName; ?></td>
        <td><?php if (isset($e->FirstName)) echo $e->FirstName; ?></td>
        <td><?php if (isset($e->ETitle)) echo $e->ETitle; ?></td>
        <td><?php if (isset($e->HireDate)) echo $e->HireDate; ?></td>
        <td><?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?></td>
      </tr>
    <?php }?>
    </tbody>
    </table>
  </div>
</main><!-- /.container -->
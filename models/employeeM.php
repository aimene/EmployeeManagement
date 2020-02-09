<?php
class EmployeeModel {
    public function construct(){}
    public function list(){
      $sql='select E.EmployeeID, C.ContactID, E.NationalIDNumber,E.Title as ETitle, C.Title as CTitle, C.FirstName, C.MiddleName, C.LastName, C.EmailAddress, E.HireDate
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=adw', 'root', '');
        $stmt=$dbh->prepare($sql);
        //$stmt->bindParam(":var",$var);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        return $res;
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
}
?>
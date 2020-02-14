<?php
class EmployeeModel {
    public function construct(){}
    public function listAll(){
      $sql='select E.EmployeeID, C.ContactID, E.NationalIDNumber,E.Title as ETitle, C.Title as CTitle, C.FirstName, C.MiddleName, C.LastName, C.EmailAddress, E.HireDate
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
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
    public function listOne($id){
      $sql='select E.*, C.*,E.Title as ETitle, C.Title as CTitle, EM.Title as EMTitle, CM.Title as CMTitle, CM.FirstName as CMFirstName, CM.MiddleName as CMMiddleName, CM.LastName as CMLastName
      from employee as E
      inner join contact as C on E.ContactID=C.ContactID
      left join employee as EM on E.ManagerID=EM.EmployeeID
      left join contact as CM on EM.ContactID=CM.ContactID
      where E.EmployeeID=:id';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        $stmt->bindParam(":id",$id);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        return current($res);
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }

    public function deleteOne($id){
      $sql='delete from employee where EmployeeID=:id';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        $stmt->bindParam(":id",$id);
        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;
        //return current($res);
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }

    
    public function updateOne($id,$NationalIDNumber,$LoginID){
      $sql='update employee as e set e.NationalIDNumber=:NationalIDNumber ,e.LoginID=:LoginID  where e.EmployeeID =:id';
      try {
        $dbh = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
        $stmt=$dbh->prepare($sql);
        $stmt->bindParam(":NationalIDNumber",$NationalIDNumber);
        $stmt->bindParam(":LoginID",$LoginID);
        $stmt->bindParam(":id",$id);

        $res=($stmt->execute())?$stmt->fetchAll(PDO::FETCH_OBJ): null;
        $dbh = null;

        return current($res);
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
    }
}
?>
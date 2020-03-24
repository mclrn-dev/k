<?php
session_start();
class UserData
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findOneUser($login, $password)
    {
        $q = "SELECT * FROM users WHERE (login=:login AND password=:password)";
        $stmt = $this->pdo->prepare($q);
        $stmt->execute(['login' => $login, 'password' => $password]);
        return $stmt->fetch();
    }

    public function loginUser($login, $password)
    {
        $_SESSION["auth"] = false;
        $res = $this->findOneUser($login, $password);

        if ($res) {
            $_SESSION["auth"] = true;
            $_SESSION["error"] = "";
            $_SESSION["id"] = $res->id_user;
        } else {

            $_SESSION["error"] = "<div>
                Если у вас нет аккаунта, <a href='reg.php'>Зарегистрируйся</a>.
            </div>";
        }
    }

    public function registrUser($login, $password, $nik, $image)
    {
        $res = $this->findOneUser($login, $password);

        if ($res) {
            $_SESSION["errorTwo"] = "<div> Такой логин или пароль уже существует </div>";
            header('Location: reg.php');
        } else {
            $_SESSION["errorTwo"] = "";
            $stmt = $this->pdo->prepare("INSERT INTO users(login, password, nik) VALUES (:login,:pass,:nik)");
            $stmt->execute(["login" => $login, "pass" => $password, "nik" => $nik]);

            $id = $this->pdo->lastInsertId();

            $stmt = $this->pdo->prepare("INSERT INTO images(name_img, id_user) VALUES (:name, :id_user)");
            $stmt->execute([
                "name" => $image,
                "id_user" => $id
            ]);
            $_SESSION["id"] = $id;
            header('Location: index.php');
        }
    }

    public function addImageUser($image, $id)
    {
        // $res = $this->findOneUser($data);

        $stmt = $this->pdo->prepare("INSERT INTO images(name_img, id_user) VALUES (:name,:id)");
        $stmt->execute(["name" => $image, "id" => $id]);
    }

    public function showUserData()
    {
        $id_user = $_SESSION["id"];


        $stmt = $this->pdo->prepare("SELECT * FROM images, users WHERE images.id_user=users.id_user AND users.id_user= :idUser");
        $stmt->execute(["idUser" => $id_user]);
        return  $stmt->fetchAll();
    }
    public function exit()
    {
        $_SESSION["auth"] = false;
    }
}

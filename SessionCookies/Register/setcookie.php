<?
if (password_verify($password, $data['password'])) {


    $_SESSION["login"] = true;
    $_SESSION["username"] = $data['username'];


    if (isset($input["remember"])) {

        setcookie("id", $data['id'], time() + 3600);
    }
}

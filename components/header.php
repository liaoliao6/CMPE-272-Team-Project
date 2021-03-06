<?php
session_start();
require_once './components/loginModal.php';
require_once './components/registerModal.php';

logoutHandler();

function logoutHandler()
{
    if (isset($_POST["logout"])) {
        unset($_SESSION['user']);
    }
}

function loginUIHandler()
{
    if (!isset($_SESSION['user'])) {
        echo '<button class="btn btn-primary mr-sm-2" data-toggle="modal" data-target="#registerModal">Register
                 </button>
                 <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">Login
                 </button>';
    } else {
        echo 'Welcome ', $_SESSION['user'], '<form style="margin: 0" action="" method="POST"><button type="submit" name="logout" class="btn btn-primary ml-2">Logout</button></form>';
    }
}

function navTabHandler()
{
    $homeTab = <<<_END
  <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
_END;

    $aboutTab = <<<_END
  <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
_END;

    $newsTab = <<<_END
  <li class="nav-item">
                <a class="nav-link" href="/news">News</a>
            </li>
_END;

    $productTab = <<<_END
  <li class="nav-item">
                <a class="nav-link" href="/product">Product</a>
            </li>
_END;

    $contactTab = <<<_END
  <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
_END;
    $userTab = <<<_END
  <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
            </li>
_END;

    switch ($GLOBALS['currentPage']) {
        case 'about':
            $aboutTab = <<<_END
<li class="nav-item active">
  <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
</li>
_END;
            break;
        case 'news':
            $newsTab = <<<_END
<li class="nav-item active">
  <a class="nav-link" href="/news">News <span class="sr-only">(current)</span></a>
</li>
_END;
            break;
        case 'product':
            $productTab = <<<_END
<li class="nav-item active">
  <a class="nav-link" href="/product">Product <span class="sr-only">(current)</span></a>
</li>
_END;
            break;
        case 'contact':
            $contactTab = <<<_END
<li class="nav-item active">
  <a class="nav-link" href="/contact">Contact <span class="sr-only">(current)</span></a>
</li>
_END;
            break;
        case 'user':
            $userTab = <<<_END
<li class="nav-item active">
  <a class="nav-link" href="/user">User <span class="sr-only">(current)</span></a>
</li>
_END;
            break;
        default:
            $homeTab = <<<_END
<li class="nav-item active">
  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
</li>
_END;
    }

    echo $homeTab, $aboutTab, $newsTab, $productTab, $userTab, $contactTab;
}

?>

<!DOCTYPE html>
<header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>

<html>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Day Dream</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php navTabHandler() ?>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <?php loginUIHandler(); ?>
        </div>

    </div>
</nav>
</body>
</html>

<?php


?>

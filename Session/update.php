<?php
    session_start();
    include "db.php";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $pid=$_POST["pid"];
        $pquant=$_POST["pquant"];

        $sql=$conn->prepare("update products set pquantity=? where pid=?");
        $sql->bind_param('ii',$pquant,$pid);

        if ($sql->execute()) {
            header("Location:home.php");
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <h5>Hello, <?php echo $_SESSION["name"]?></h5>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="home.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Insert
                                    
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update
                                    <span class="visually-hidden">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action="logout.php">
                            
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <h5 class="text-center p-3 m-2">Update Data</h5>
            <div class="col-4 mx-auto p-3 m-2 rounded bordered shadow">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Product ID</label>
                        <input
                            type="number"
                            class="form-control"
                            name="pid"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Product Quantity</label>
                        <input
                            type="number"
                            class="form-control"
                            name="pquant"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                    
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                       Update Data
                    </button>
                    
                    
                    
                </form>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

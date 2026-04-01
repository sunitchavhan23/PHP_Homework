<?php
    include "db.php";

    if (isset($_GET["id"])) {
        $id=$_GET["id"];

        $sql=$conn->prepare("select * from project where id=?");
        $sql->bind_param("i",$id);
        $sql->execute();
        $user=$sql->get_result()->fetch_assoc();
    }

    if ($_SERVER["REQUEST_METHOD"]==="POST") {
        $project_name=$_POST["project_name"];
        $project_description=$_POST["project_description"];
        $status=$_POST["status"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        $sql=$conn->prepare("update project set project_name=?,project_description=?,status=?,start_date=?,end_date=? where id=?");
        $sql->bind_param("sssssi",$project_name,$project_description,$status,$start_date,$end_date,$id);
        if ($sql->execute()) {
            header("Location:index.php");
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
            <!-- place navbar here -->
        </header>
        <main>
            <h5 class="text-center">Update Project Details </h5>
            <form action="" method="POST">
                <div
                    class="container col-5 mx-auto p-2 my-3 shadow rounded bordered"
                >
                    <div class="mb-3">
                        <label for="" class="form-label">Project Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="project_name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user['project_name']?>"
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input
                            type="textarea"
                            class="form-control"
                            name="project_description"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user['project_description']?>"
                        />
                        
                    </div>
                    
                   <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select
                        class="form-select form-select-lg"
                        name="status"
                        id=""
                        value="<?= $user['status']?>"
                    >
                        <option selected>Select one</option>
                        <option value="Pending">Pending</option>
                        <option value="In_Progress">In-Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                   </div>
                   

                    <div class="mb-3">
                        <label for="" class="form-label">Start Date</label>
                        <input
                            type="date"
                            class="form-control"
                            name="start_date"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user['start_date']?>"
                        />
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">End Date</label>
                        <input
                            type="date"
                            class="form-control"
                            name="end_date"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?= $user['end_date']?>"
                        />
                        
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Update Data
                    </button>
                    
                    
                </div>
                
            </form>
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

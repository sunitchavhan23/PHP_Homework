<?php
    include "db.php";
    $result=$conn->query("select * from project");

    if ($_SERVER["REQUEST_METHOD"]==="POST") {
        $project_name=$_POST["project_name"];
        $project_description=$_POST["project_description"];
        $status=$_POST["status"];
        $start_date=$_POST["start_date"];
        $end_date=$_POST["end_date"];
        
        $sql=$conn->prepare("insert into project(project_name,project_description,status,start_date,end_date) values (?,?,?,?,?)");
        $sql->bind_param("sssss",$project_name,$project_description,$status,$start_date,$end_date);
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
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <h6>Hello, <?php echo $_SESSION["username"]?></h6>
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
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0 " action="project_logout.php">
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
            <h5 class="text-center">Add Project Details </h5>
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
                        />
                        
                    </div>
                    
                   <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select
                        class="form-select form-select-lg"
                        name="status"
                        id=""
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
                        />
                        
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Add Data
                    </button>
                    
                    
                </div>
                
            </form>

            <br>
            <br>
            <h5 class="text-center">Project Details</h5>
            <div
                class="container col-6 mx-auto p-2 my-2 rounded shadow bordered"
            >
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                    >
                        <thead>
                            <tr>
                                <th scope="col">Project ID</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Project Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Action 1</th>
                                <th scope="col">Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row=$result->fetch_assoc()) 
                            { ?>
                                
                            <tr class="">
                                <td scope="row"><?= $row['id']?></td>
                                <td><?= $row['project_name']?></td>
                                <td><?= $row['project_description']?></td>
                                <td><?= $row['status']?></td>
                                <td><?= $row['start_date']?></td>
                                <td><?= $row['end_date']?></td>
                                <td>
                                    <a
                                        name=""
                                        id=""
                                        class="btn btn-primary"
                                        href="edit.php?id=<?=$row['id']?>"
                                        role="button"
                                        >Edit</a
                                    >
                                    
                                </td>

                                <td>
                                    <a
                                        name=""
                                        id=""
                                        class="btn btn-primary"
                                        href="delete.php?id=<?=$row['id']?>"
                                        role="button"
                                        >Delete</a
                                    >
                                    
                                </td>
                            </tr>
                            
                            <?php
                            }?>
                        </tbody>
                    </table>
                </div>
                
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


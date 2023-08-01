<?php    

    // connect to database
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_project', 'root', '');

    $sql = $pdo -> prepare(
        "SELECT * FROM `tb_extra`"
    );
    
    $sql -> execute();

    // get extra row data
    $about = $sql -> fetch()['extra'];

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <title>Dashboard</title>

</head>

<body>
        
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <div class="container-fluid">
 
            <a class="navbar-brand" href="#">Brand</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button><!--navbar-toggler-->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">

                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item item-home"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item item-addMember"><a class="nav-link" href="#">Add Member</a></li>
                    <li class="nav-item item-memberList"><a class="nav-link" href="#">Member List</a></li>
                    <li class="nav-item item-extra"><a class="nav-link" href="#">Extras</a></li>

                </ul><!--navbar-nav me-auto-->

                <ul class="navbar-nav me-auto navbar-right">
                
                    <li class="nav-item"><a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>Exit!</a></li>

                </ul><!--navbar-nav navbar-right-->

            </div><!--collapse navbar-collapse-->
            
        </div><!--container-fluid-->

    </nav><!--navbar navbar-expand-md-->
        
    <header class="header">
    
        <div class="container">
        
            <div class="row">
            
                <div class="col-md-8">
                
                    <h2 class="header-text"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear gear-icon" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>Dashboard</h2>
                    <!--Gear Icon and a H2-->

                </div><!--col-md-8-->

                <div class="col-md-4">
                
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill cup-icon" viewBox="0 0 16 16">
                        <path d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z"/>
                    </svg>Your Last Login Was On: 10/01/2021</p>
                    <!--Coffer Icon and P-->
                
                </div><!--col-md-8-->
            
            </div><!--row-->
        
        </div><!--container-->

    </header><!--#header#-->

    <main class="main-box">

    <section class="bread">

        <div class="container">

            <nav aria-label="breadcrumb">

                <ol class="breadcrumb">

                    <li class="breadcrumb-item">Home</li>
                    
                </ol><!--breadcrumb-->

            </nav><!--breadcrumb-->

        </div><!--container-->

    </section><!--bread-->

    <section class="main">

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <ul class="list-group" id="list-group home">

                        <li class="list-group-item list-group-title item-home"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill list-group-home" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                        </svg>Home</a></li>

                        <li class="list-group-item item-addMember"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill list-group-icon" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>Add Member</a></li>

                        <li class="list-group-item item-memberList"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill list-group-icon" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg>Member List</a></li>

                        <li class="list-group-item item-extra"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill list-group-icon" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>Extra</a></li>

                    </ul><!--list-group-->

                </div><!--col-md-3-->

                <div class="col-md-9 panels">

                    <div class="panel panel-default second-panel" id="addMember">

                        <div class="panel-heading">

                            <h3>Add Member</h3>

                        </div><!--panel-heading-->

                        <div class="panel-body">

                            <form method="post" action="index.php">
                            
                                <div class="form-group">

                                    <label for="member-name">Member Name:</label>
                                    <input type="text" name="member-name" class="form-control" id="member-name">

                                    <label for="member-surname">Member Surname</label>
                                    <input type="text" name="member-surname" class="form-control" id="member-surname">

                                    <label>Member Description</label>
                                    <textarea name="description" class="form-control"></textarea>

                                </div><!--form-group-->
                                
                                <input type="hidden" name="add-member" value="">

                                <button type="submit" class="btn btn-outline-dark">Submit</button>
        
                            </form>

                            <br>

                            <!-- add Member to database -->
                            <?php if(isset($_POST['add-member'])): ?>

                                <?php try { ?>
                                    
                                    <?php

                                        $name = $_POST['member-name'];
                                        $surname = $_POST['member-surname'];
                                        $description = $_POST['description'];
                                        
                                        $query = $pdo -> prepare(
                                            "INSERT INTO `tb_team`
                                            VALUES (null, ?, ?, ?);"
                                        );
                                        
                                        $query -> execute([
                                            $name, $surname,
                                            $description
                                        ]);

                                    ?>

                                    <!-- Success Message -->

                                    <div class="alert alert-success" role="alert">

                                        <h4 class="alert-heading">Well done!</h4>

                                        <p>You <b>successfully</b> add a member to the team.</p>

                                        <hr>

                                    </div>

                                <?php } catch(Exception $e) { ?>

                                    <!-- Error Message -->

                                    <div class="alert alert-danger" role="alert">
                                    
                                        <p>Something went wrong, and we can't edit the extra section ):</p>

                                    </div>

                                <?php } ?>

                            <?php endif ?>

                        </div><!--panel-body-->

                    </div><!--panel-default-->

                    <div class="panel panel-default third-panel" id="memberList">

                        <div class="panel-heading">

                            <h3>Member List</h3>

                        </div><!--panel-heading-->

                        <div class="panel-body">

                            <table class="table table-bordered">

                                <thead>

                                    <tr>

                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Delete Member</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    
                                    <!-- show Members in the list -->
                                    <?php 
                                    
                                        $query = $pdo -> prepare(
                                            "SELECT * FROM `tb_team`;"
                                        );

                                        $query -> execute();

                                        $selectMember = $query -> fetchAll();

                                    ?>

                                    <?php foreach($selectMember as $key => $row): ?>
                                    
                                        <tr>

                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['surname'] ?></td>
                                            <td><button class="btn btn-danger delete-member" member_id="<?php echo $row['id'] ?>">Delete</button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color: red;">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg></td>

                                        </tr>
                                    
                                    <?php endforeach ?>

                                </tbody>

                            </table><!--table-bordered-->

                        </div><!--panel-body-->

                    </div><!--panel-default-->

                    <div class="panel panel-default first-panel" id="extra">

                        <div class="panel-heading">

                            <h3>Extras</h3>

                        </div><!--panel-heading-->

                        <div class="panel-body">

                            <form method="post" action="index.php">
                            
                                <div class="form-group">

                                    <label>HTMl Code:</label>
                                    <textarea name="extra" class="form-control"><?php echo $about ?></textarea>

                                </div><!--form-group-->

                                <input type="hidden" name="edit_extra" value="">

                                <button type="submit" name="action" class="btn btn-outline-dark">Submit</button>

                            </form>

                            <br>
                                
                            <!-- Insert About section in Main Page (with HTML code) -->
                            <?php if(isset($_POST['edit_extra'])): ?>
                                
                                <?php try { ?>
                                
                                    <?php

                                        $extra = $_POST['extra'];

                                        $pdo -> exec(
                                            "DELETE FROM `tb_extra`;"
                                        );

                                        $query = $pdo -> prepare(
                                            "INSERT INTO `tb_extra`
                                            VALUES (null, ?);"
                                        );

                                        $query -> execute([$extra]);

                                        $sql = $pdo -> prepare(
                                            "SELECT * FROM `tb_extra`"
                                        );

                                        $sql -> execute();
                                        $about = $sql -> fetch()['extra'];
                                        
                                    ?>

                                    <!-- Success Message -->
                                    <div class="alert alert-success" role="alert">

                                        <h4 class="alert-heading">Well done!</h4>

                                        <p>You <b>successfully</b> edit the extra section.</p>

                                        <hr>

                                    </div>

                                <?php } catch(Exception $e) { ?>

                                    <!-- Error Message -->
                                    <div class="alert alert-danger" role="alert">
                                    
                                        <p>Something went wrong, and we can't edit the extra section ):</p>

                                    </div>

                                <?php } ?>

                            <?php endif ?>

                        </div><!--panel-body-->

                    </div><!--panel-default-->

                </div><!--col-md-9-->

            </div><!--row-->

        </div><!--container-->

    </section><!--main-->

    </main><!--main-box-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="Scripts/main.js"></script>

</body>

</html>
<?php
    use Controllers\AdminController;
    use Models\Fields;
    use Models\UserFields;

    $controller = new AdminController();
    $userData = null;
    $changeID = $_GET['edit'] ? $_GET['id'] : -1;

    if (isset($_GET['delete'])) {
        $selectedUserID = intval($_GET['delete']); 
        $controller->handleMembersListDeletion($selectedUserID);
    }

    if ($changeID != -1) {
        foreach($controller -> getUserData() as $key => $row) {
            if ($row[Fields::ID] == $changeID) {
                $userData = $row;
            }
        }
    }
?>

<script src="<?php echo INCLUDE_PATH ?>Scripts/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="<?php echo INCLUDE_PATH ?>Scripts/changeLocation.js"></script>
<script src="<?php echo INCLUDE_PATH ?>Scripts/admin.js"></script>

<header class="header">

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <h2 class="header-text"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear gear-icon" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                    </svg>Dashboard</h2>
                <!--Gear Icon and a H2-->

            </div><!--col-md-8-->

            <div class="col-md-4">

                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill cup-icon" viewBox="0 0 16 16">
                        <path d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z" />
                    </svg>
                    Your Last Login Was On: 10/01/2021
                </p>
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
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                </svg>Home</a></li>

                        <li class="list-group-item item-addMember"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill list-group-icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                </svg>Add Member</a></li>

                        <li class="list-group-item item-memberList"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill list-group-icon" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg>Member List</a></li>

                        <li class="list-group-item item-extra"><a class="text-decoration-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill list-group-icon" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>Extra</a></li>

                    </ul><!--list-group-->

                </div><!--col-md-3-->

                <div class="col-md-9 panels">

                    <div class="panel panel-default second-panel" id="addMember">

                        <div class="panel-heading">

                            <h3>Add Member</h3>

                        </div><!--panel-heading-->

                        <div class="panel-body">

                            <?php 
                                if (isset($_POST['edit-member'])) {
                                    $controller -> handleEditMemberForm($changeID);
                                }

                                if (isset($_POST['add-member'])) {
                                    $controller -> handleAddMemberForm();
                                }
                            ?>

                            <form method="post">

                                <div class="form-group">

                                    <label for="member-name">Member Name:</label>
                                    <input 
                                        type="text" 
                                        name="member-name" 
                                        class="form-control" 
                                        id="member-name"
                                        value="<?php print $userData[UserFields::username] ?? '' ?>"
                                    />

                                    <label for="member-surname">Member Password</label>
                                    <input 
                                        type="text" 
                                        name="member-password" 
                                        class="form-control" 
                                        id="member-surname"
                                        value="<?php print $userData[UserFields::password] ?? '' ?>"
                                    />
                                    
                                    <label>Member Description</label>
                                    <textarea name="member-description" class="form-control"><?php 
                                        print $userData[UserFields::description] ?? '' 
                                    ?></textarea>

                                    <label for="member-surname">Member Position</label>
                                    <select name="member-position" class="form-control" id="member-position">
                                        <option
                                            value="<?php echo Position::User->value ?>" 
                                            <?php echo ($userData[UserFields::position] ?? 'selected') == Position::User->value ? 'selected' : ''  ?>
                                        >User</option>
                                        <option 
                                            value="<?php echo Position::Admin->value ?>"
                                            <?php echo ($userData[UserFields::position] ?? '') == Position::Admin->value ? 'selected' : ''  ?>
                                        >Admin</option>
                                    </select>

                                </div><!--form-group-->

                                <!-- <input type="hidden" name="add-member" value=""> -->

                                <input type="submit" name="<?php print $changeID == -1 ? 'add-member' : 'edit-member' ?>" class="btn btn-outline-dark"><?php print $changeID == -1 ? 'Add Member' : 'Change' ?></input>

                            </form>

                            <br>

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
                                        <th>Edit Member</th>
                                        <th>Delete Member</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php foreach ($controller -> getUserData() as $key => $row) : ?>

                                        <tr>
                                            
                                            <td><?php echo $row['name'] ?></td>
                                            <td>
                                                <button class="btn btn-danger delete-member" onclick="editRedirect(<?php echo $row['id'] ?>)">edit</button>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color: red;">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </td>
                                            
                                            <td><button class="btn btn-danger delete-member" onclick="deleteRedirect(<?php echo $row['id'] ?>)">Delete</button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color: red;">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
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
                            <?php if (isset($_POST['edit_extra'])) : ?>

                                <?php try { ?>

                                    <?php

                                    $extra = $_POST['extra'];

                                    $pdo->exec(
                                        "DELETE FROM `tb_extra`;"
                                    );

                                    $query = $pdo->prepare(
                                        "INSERT INTO `tb_extra`
                                            VALUES (null, ?);"
                                    );

                                    $query->execute([$extra]);

                                    $sql = $pdo->prepare(
                                        "SELECT * FROM `tb_extra`"
                                    );

                                    $sql->execute();
                                    $about = $sql->fetch()['extra'];

                                    ?>

                                    <!-- Success Message -->
                                    <div class="alert alert-success" role="alert">

                                        <h4 class="alert-heading">Well done!</h4>

                                        <p>You <b>successfully</b> edit the extra section.</p>

                                        <hr>

                                    </div>

                                <?php } catch (Exception $e) { ?>

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
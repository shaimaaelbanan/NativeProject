<?php include_once "header.php"; ?>
 <!-- Breadcrumb Area Start -->
 <div class="breadcrumb-area bg-image-3 ptb-150">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>Check Code</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Check Code</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Check Code Start -->
<div class="container">
    <div class="row">
        <div class="offset-4 col-4">
            <form method="POST" class="my-5">
                <?php
                    if(!empty($_GET) && isset($_GET['email'])){
                        include_once "User.php";
                        $check = new User();
                        $check->setEmail($_GET['email']);
                    }else{
                        header('Location:404.php');
                    }
                    if(!empty($_POST)){
                        $check->setCode($_POST['code']);
                        $result = $check->checkCode();
                        if(!empty($result)){
                            if(isset($_GET['forget']) && $_GET['forget'] === 'true'){
                                header('Location:change-password.php?email='.$check->getEmail());die;
                            }
                            $user = $result->fetch_object();
                            $check->setStatus(1);
                            $result2 = $check->updateStatus();
                            if($result2){
                                $_SESSION['user'] = $user;
                                header('Location:index.php');
                            }else{
                                echo "<div class='alert alert-danger'> SomeThing Went Wrong!</div>";
                            }
                        }else{
                            echo "<div class='alert alert-danger'> Wrong Code! </div>";
                        }
                    }
                ?>
                    <div class="form-group">
                        <div class="form-group">
                          <label for="code">Code</label>
                          <input type="text"
                            class="form-control" name="code" id="code" aria-describedby="helpId" placeholder="Enter the code ...">
                          <small id="helpId" class="form-text text-muted">check email to get code</small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success rounded"> Check Code </button> 
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- Check Code End -->
<?php include_once "footer.php"; ?>

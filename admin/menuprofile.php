<!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php 
                            include_once("adminfunctions.php");
                                $user=getuser();
                                $name='';
                                $sql="SELECT name FROM users WHERE id=$user";
                                $result=mysqlexec($sql);
                                if($result){
                                    $row=mysqli_fetch_assoc($result);
                                    $name=$row['name'];
                                }
                                
                                echo $name;
                            ?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->
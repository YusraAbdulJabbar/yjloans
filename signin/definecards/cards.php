    <?php
                    require("db.php");
                    $qry = "select * from loanterms ";
                    $output= $conn->query($qry);
                    while($row = $output->fetch_assoc())
                    {
                        echo '<div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="images/hostels/h-'.$row['id'].'.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">'.$row['title'].'</h5>
                                    <div>'.$row['define'].'
                                    </div>
                                  
                        </div>
                    </div>';
                    }
                    ?>
                </div>
            </div>
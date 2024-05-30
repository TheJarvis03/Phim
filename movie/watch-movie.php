<?php include('../layout/header.php') ?>
<?php include('../layout/menu.php') ?>
            <?php
                if (isset($_GET['xem'])) 
                {
                    $id = $_GET['xem'];
                } 
                else 
                {
                    $id = '';
                }
                $sql = "SELECT * FROM phim, content WHERE phim.id = content.stt";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) 
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $movie_title = $row["Tenphim"];
                        $category = $row["Theloai"];
                        $video = $row["video"];
                    }
                }
                else
                {
                    echo"Không tìm thấy phim";
                }
            ?>
            <div id="content-watch">
                <h3>Trang chủ/ <?= $movie_title ?></h3>
                <div class="view-watch">
                    <iframe src="$video" frameborder="0"></iframe>
                </div>
                <div class="comment-movie">
                    <h4>Bình luận</h4>
                    <div>
                        <img src="" alt="">
                        <input type="text">
                    </div>
                </div>
                <div class="recommend-movie">
                    <?php
                        $sql = "SELECT * FROM content WHERE Theloai = '$category'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) 
                        {
                            echo "<h4>Có thể bạn quan tâm</h4>";
                            echo "<ul>";

                            while($row = mysqli_fetch_assoc($result)) 
                            {
                                $recommend_poster = $row["poster"];
                                $recommend_phim = $row["Tenphim"];
                                $recommend_movie = $row["Movie"];

                                echo "<li><a href='#'><img src='$recommend_poster'><p>$recommend_movie</p>$recommend_phim</a></li>";
                            }
                               echo "</ul>";
                        }
                    ?>
                </div>
            </div>

            <div id="sidebar-movie">
                <?php
                    $sql = "SELECT * FROM content WHERE Namsx = 2024";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) 
                    {
                        echo "<h4>Có thể bạn quan tâm</h4>";
                        echo "<ul>";

                        while($row = mysqli_fetch_assoc($result)) 
                        {
                            $recommend_poster = $row["poster"];
                            $recommend_phim = $row["Tenphim"];
                            $recommend_movie = $row["Movie"];

                            echo "<li><a href='#'><img src='$recommend_poster'><p>$recommend_movie</p>$recommend_phim</a></li>";
                        }
                        echo "</ul>";
                    }
                ?>
            </div>
<?php include('../layout/footer.php') ?>
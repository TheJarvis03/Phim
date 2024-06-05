<?php include('../layout/header.php') ?>
<?php include('../layout/menu.php') ?>

            <div id="admin">
                <h3>DANH SÁCH CÁC PHIM</h3>
                <?php
                    $sql = "SELECT * FROM content, phim WHERE content.STT = phim.id";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) 
                    {
                        echo "
                            <div admin-title>
                                <h4 class='movie'>Tên phim</h4>
                                <h5 class='movie2'>Movie</h5>
                                <p class='evaluate'>Đánh giá</p>
                                <p class='status'>Trạng thái</p>
                                <p class='quality'>Chất lượng</p>
                                <p class='language'>Ngôn ngữ</p>
                                <p class='year'>Năm sản xuất</p>
                                <p class='time'>Thời lượng</p>
                                <p class='category'>Thể loại</p>
                                <p class='nation'>Quốc gia</p>
                                <p class='content'>Nội dung</p>
                            </div>";
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row["STT"];
                            $title = $row["Tenphim"];
                            $movie = $row["Movie"];
                            $image = $row["poster"];
                            $country = $row["Quocgia"];
                            $rating = $row["danh_gia"];
                            $status = $row["trang_thai"];
                            $quality = $row["chat_luong"];
                            $language = $row["ngon_ngu"];
                            $year = $row["Namsx"];
                            $duration = $row["thoi_luong"];
                            $category = $row["Theloai"];
                            $content = $row["noi_dung"];
                            echo "  <ul class='admin-content'>
                                        <div>
                                            <img src='$image'>
                                            <h4 class='movie'>$title</h4>
                                            <h5 class='movie2'>$movie</h5>
                                            <p class='evaluate'>$rating / 5</p>
                                            <p class='status'>$status </p>
                                            <p class='quality'>$quality </p>
                                            <p class='language'>$language </p>
                                            <p class='year'>$year </p>
                                            <p class='time'>$duration </p>
                                            <p class='category'>$category </p>
                                            <p class='nation'>$country </p>
                                            <p class='content'>$content </p>
                                            <button class='sua'>Sửa</button>
                                            <button class='xoa'>Xoá</button>
                                        </div>
                                    </ul>";
                        }
                    }
                    mysqli_free_result($result);
                ?>
            </div>
    <?php include('../layout/footer.php') ?>
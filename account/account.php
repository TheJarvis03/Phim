<?php include('../layout/header.php') ?>
<?php include('../layout/menu.php') ?>

        

        <div id="content">
            <div class="content1">
                <div class="lcontent1">
                    <ul>
                        <li>
                            <a><button>
                                    <h4> Menu</h4>
                                </button></a>
                        </li>
                    </ul>
                </div>
                <div class="lcontent2">
                    <div class="lct2">
                        <ul>
                            <li>
                                <a><button>
                                        <h4> Profile</h4>
                                    </button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content2">
                <div class="lcontent3">
                    <div class="lct3-1">
                        <ul>
                            <li>
                                <a href=""><button>
                                        <h4> Profile</h4>
                                    </button></a>
                            </li>
                        </ul>
                    </div>
                    <div class="lct3-2">
                        <li>
                            <a href=""><button>
                                    <h4> Cài đặt</h4>
                                </button></a>
                        </li>
                        </ul>
                    </div>
                    <div class="lct3-3">
                        <li>
                            <a href=""><button>
                                    <h4> Quản lý dữ liệu phim</h4>
                                </button></a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="rcontent4">
                    <ul><button>
                            <li>Họ Tên: <?php echo $ho_ten ?></li>
                            <li>SĐT: <?php echo $sdt ?></li>
                            <li>Ngày sinh: <?php echo $ngay_sinh ?></li>
                            <li>Email: <?php echo $email ?></li>
                            <li>Địa chỉ: <?php echo $dia_chi ?></li>
                        </button></ul>
                </div>
            </div>
        </div>
<?php include('../layout/footer.php'); ?>
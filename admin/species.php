<?php
require_once('../db/DBHelper.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Species</title>
</head>

<body>
    <!-- Start: Side Menu -->
    <div class="side-menu">
        <div class="brand-name">
            <h1>BuffaPoo</h1>
        </div>
        <ul>
            <a href="./taxonomy.php">
                <li><img src="./images/taxonomy.png" alt="">&nbsp; <span>Taxonomy</span></li>
            </a>
            <a href="./species.php">
                <li><img src="images/phylogenetics.png" alt="">&nbsp; <span>Species</span></li>
            </a>
        </ul>
    </div>
    <!-- End: Side Menu -->

    <div class="container">
        <!-- Start: Navigation Bar -->
        <div class="header">
            <div class="nav">
                <div class="search" style='display: none'>
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="add-species.php" class="btn">Thêm mới</a>
                    <img style='display: none' src="images/notifications.png" alt="">
                    <div style='display: none' class="img-case">
                        <img src="images/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Navigation Bar -->
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="table-container">
                        <table class="species-table show">
                            <tr>
                                <th>ID</th>
                                <th>ScienceName</th>
                                <th>VietnameseName</th>
                                <th>LocalName</th>
                                <th>Family</th>
                                <th></th>
                            </tr>
                            <?php
                            $sql =  'SELECT id, ScienceName ,VietnameseName, LocalName, Family FROM species';
                            $result = executeResult($sql);

                            foreach ($result as $row) {
                                echo '
                                        <tr>
                                            <td>' . ($row['id']) . '</td>
                                            <td>' . ($row['ScienceName']) . '</td>
                                            <td>' . ($row['VietnameseName']) . '</td>
                                            <td>' . ($row['LocalName']) . '</td>
                                            <td>' . ($row['Family']) . '</td>
                                            <td>
                                                <button class="edit-btn" onclick="edit(' . ($row['id']) . ')">SỬA</button>
                                                <button class="edit-btn" onclick="xoa(' . ($row['id']) . ')">XÓA</button>
                                            </td>
                                        </tr>
                                    ';
                            }
                            ?>
                        </table>
                    </div>

                </div>
                <div class="edit-area">

                </div>
            </div>
        </div>
    </div>

    <script>
        function edit(id) {
            document.location.href = `update-species.php?id=${id}`;
        }

        function xoa(id) {
            if (confirm('Bạn có chắc muốn xóa loài vật này ?')) {
                var url = `../api/api-species.php?id=${id}`;

                fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            'id': id
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        window.location.reload();
                    })
            }
        }
    </script>
</body>

</html>
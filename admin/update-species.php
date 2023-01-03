<?php

require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];

if ($REQUEST == 'GET') {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql = 'SELECT * FROM species WHERE id = "' . ($id) . '"';
        $result = executeSingleResult($sql);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>

<body>
    <div class="species-main">
        <div class="species-link">
            <a href="">Species</a>
            <i>></i>
            <p>1</p>
        </div>
        <h1 style="text-align: center; margin-bottom: 40px; font-size: 42px;">THÔNG TIN SINH VẬT</h1>
        <div class="species-container">
            <div class="species-info1">
                <h1 class="center-h1">THÔNG TIN</h1>
                <?php
                echo '
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Science Name" value="' . ($result['ScienceName']) . '" required data/>
                        <label for="name" class="form__label">Tên khoa học</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Vietnamese Name" value="' . ($result['VietnameseName']) . '" required data/>
                        <label for="name" class="form__label">Tên tiếng Việt</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Local Name" value="' . ($result['LocalName']) . '" required data/>
                        <label for="name" class="form__label">Tên địa phương</label>
                    </div>
                    ';
                $sqlFam = 'SELECT * FROM family order by FAMILY_NAME asc';
                $resultFam = executeResult($sqlFam);

                $options = '';
                foreach ($resultFam as $item) {
                    if ($item['FAMILY_ID'] == $result['Family']) {
                        $options = $options . '<option value="' . ($item['FAMILY_ID']) . '" selected>' . ($item['FAMILY_NAME']) . '</option>';
                    } else {
                        $options = $options . '<option value="' . ($item['FAMILY_ID']) . '">' . ($item['FAMILY_NAME']) . '</option>';
                    }
                }
                echo '
                    <div class="form__group field">
                        <select type="input" class="form__field" placeholder="Family" value="" required data>
                            ' . $options . '
                        </select>
                        <label for="name" class="form__label">Họ</label>
                    </div>
                ';
                ?>

            </div>
            <div class="species-info1">
                <h1 class="center-h1">MỨC ĐỘ BẢO TỒN</h1>
                <?php
                $sqlIUCN = 'SELECT * FROM IUCN';
                $resultIUCN = executeResult($sqlIUCN);

                $options = '';
                foreach ($resultIUCN as $item) {
                    if ($item['IUCN_ID'] == $result['IUCN']) {
                        $options = $options . '<option value="' . ($item['IUCN_ID']) . '" selected>' . ($item['IUCN_NAME']) . '</option>';
                    } else {
                        $options = $options . '<option value="' . ($item['IUCN_ID']) . '">' . ($item['IUCN_NAME']) . '</option>';
                    }
                }

                echo '
                <div class="form__group field">
                    <select type="input" class="form__field" placeholder="IUCN" value="" required data>
                        ' . $options . '
                    </select>
                    <label for="name" class="form__label">IUCN</label>
                </div>
                ';

                $sqlVNRL = 'SELECT * FROM VNRL';
                $resultVNRL = executeResult($sqlVNRL);

                $options = '';
                foreach ($resultVNRL as $item) {
                    if ($item['VNRL_ID'] == $result['VNRL']) {
                        $options = $options . '<option value="' . ($item['VNRL_ID']) . '" selected>' . ($item['VNRL_NAME']) . '</option>';
                    } else {
                        $options = $options . '<option value="' . ($item['VNRL_ID']) . '">' . ($item['VNRL_NAME']) . '</option>';
                    }
                }

                echo '
                <div class="form__group field">
                    <select type="input" class="form__field" placeholder="VNRL" value="" required data>
                        ' . $options . '
                    </select>
                    <label for="name" class="form__label">VNRL</label>
                </div>
                ';

                $sqlND32 = 'SELECT * FROM ND32';
                $resultND32 = executeResult($sqlND32);

                $options = '';
                foreach ($resultND32 as $item) {
                    if ($item['ND32_ID'] == $result['ND32']) {
                        $options = $options . '<option value="' . ($item['ND32_ID']) . '" selected>' . ($item['ND32_NAME']) . '</option>';
                    } else {
                        $options = $options . '<option value="' . ($item['ND32_ID']) . '">' . ($item['ND32_NAME']) . '</option>';
                    }
                }

                echo '
                    <div class="form__group field">
                        <select type="input" class="form__field" placeholder="ND32" value="" required data>
                            ' . $options . '
                        </select>
                        <label for="name" class="form__label">ND32</label>
                    </div>
                ';

                $sqlCITES = 'SELECT * FROM CITES';
                $resultCITES = executeResult($sqlCITES);

                $options = '';
                foreach ($resultCITES as $item) {
                    if ($item['CITES_ID'] == $result['CITES']) {
                        $options = $options . '<option value="' . ($item['CITES_ID']) . '" selected>' . ($item['CITES_NAME']) . '</option>';
                    } else {
                        $options = $options . '<option value="' . ($item['CITES_ID']) . '">' . ($item['CITES_NAME']) . '</option>';
                    }
                }

                echo '
                    <div class="form__group field">
                        <select type="input" class="form__field" placeholder="CITES" value="" required data>
                            ' . $options . '
                        </select>
                        <label for="name" class="form__label">CITES</label>
                    </div>
                ';
                ?>

            </div>
            <div class="species-info1">
                <h1 class="center-h1">ĐẶC ĐIỂM</h1>
                <?php
                echo '
                    <div class="form__group field">
                        <textarea name="" class="form__field textarea" id="" cols="30" rows="9" data>' . ($result['Morphological']) . '</textarea>
                        <label for="name" class="form__label">Đặc điểm hình thái</label>
                    </div>
                    <div class="form__group field">
                        <textarea name="" class="form__field textarea" id="" cols="30" rows="6" data>' . ($result['Ecological']) . '</textarea>
                        <label for="name" class="form__label">Đặc điểm sinh thái</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Specmen Codition" value="' . ($result['HABITAT']) . '" required data />
                        <label for="name" class="form__label">Sinh cảnh</label>
                    </div>
                    ';
                ?>
            </div>
            <div class="species-info1">
                <h1 class="center-h1">TỌA ĐỘ</h1>
                <?php
                echo '
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Coordinate S1" value="' . ($result['COORDINATES1']) . '" required data />
                        <label for="name" class="form__label">Coordinate S1</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Coordinate S2" value="' . ($result['COORDINATES2']) . '" required data />
                        <label for="name" class="form__label">Coordinate S2</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Coordinate S3" value="' . ($result['COORDINATES3']) . '" required data />
                        <label for="name" class="form__label">Coordinate S3</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Coordinate S4" value="' . ($result['COORDINATES4']) . '" required data />
                        <label for="name" class="form__label">Coordinate S4</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Coordinate S5" value="' . ($result['COORDINATES5']) . '" required data />
                        <label for="name" class="form__label">Coordinate S5</label>
                    </div>
                    <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Location" value="' . ($result['LOCATION']) . '" required data />
                    <label for="name" class="form__label">Địa điểm</label>
                </div>
                ';

                $sqlDis = 'SELECT * FROM distribution';
                $resultDis = executeResult($sqlDis);

                $options = '';
                foreach ($resultDis as $item) {
                    if ($item['DISTRIBUTION_ID'] == $result['Distribution']) {
                        $options = $options . '<option value="' . ($item['DISTRIBUTION_ID']) . '" selected>' . ($item['DISTRIBUTION_NAME']) . '</option>';
                    } else {
                        $options = $options . '<option value="' . ($item['DISTRIBUTION_ID']) . '">' . ($item['DISTRIBUTION_NAME']) . '</option>';
                    }
                }

                echo '
                    <div class="form__group field">
                        <select type="input" class="form__field" placeholder="Distribution" value="" required data>
                            ' . $options . '
                        </select>
                        <label for="name" class="form__label">Phân bổ</label>
                    </div>
                ';
                ?>



            </div>

            <div class="species-info1">
                <h1 class="center-h1">TÌNH TRẠNG MẪU VẬT</h1>
                <?php
                echo '
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="GTSD" value="' . ($result['GTSD']) . '" required data />
                        <label for="name" class="form__label">Giá trị sử dụng</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Collection Date" value="' . ($result['SPECMEN_CODITION']) . '" required data />
                        <label for="name" class="form__label">Tình trạng mẫu vật</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Collection Date" value="' . ($result['COLLECTION_DATE']) . '" required data />
                        <label for="name" class="form__label">Ngày thu mẫu</label>
                    </div>
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Collector" value="' . ($result['COLLECTOR']) . '" required data />
                        <label for="name" class="form__label">Người thu mẫu</label>
                    </div>
                    ';
                ?>
            </div>
        </div>
        <h1 style="margin: 20px 0 10px;">ẢNH LOÀI VẬT <i><small>(Vui lòng nhập vào id ảnh)</small></i></h1>
        <div class="species-imges">
            <div class="species-images-item">
                <div class="image-item" style="background-image: url('<?php echo 'https://drive.google.com/uc?export=view&id=' . ($result['Image1']) . '' ?>')">
                </div>
                <input type="text" class="files" placeholder="Link 1" value="<?php echo $result['Image1'] ?>" sub-data>
            </div>
            <div class="species-images-item">
                <div class="image-item" style="background-image: url('<?php echo 'https://drive.google.com/uc?export=view&id=' . ($result['Image2']) . '' ?>')">
                </div>
                <input type="text" class="files" placeholder="Link 2" value="<?php echo $result['Image2'] ?>" sub-data>
            </div>
            <div class="species-images-item">
                <div class="image-item" style="background-image: url('<?php echo 'https://drive.google.com/uc?export=view&id=' . ($result['Image3']) . '' ?>')">
                </div>
                <input type="text" class="files" placeholder="Link 3" value="<?php echo $result['Image3'] ?>" sub-data>
            </div>
            <div class="species-images-item">
                <div class="image-item" style="background-image: url('<?php echo 'https://drive.google.com/uc?export=view&id=' . ($result['Image4']) . '' ?>')">
                </div>
                <input type="text" class="files" placeholder="Link 4" value="<?php echo $result['Image4'] ?>" sub-data>
            </div>
            <div class="species-images-item">
                <div class="image-item" style="background-image: url('<?php echo 'https://drive.google.com/uc?export=view&id=' . ($result['Image5']) . '' ?>')">
                </div>
                <input type="text" class="files" placeholder="Link 5" value="<?php echo $result['Image5'] ?>" sub-data>
            </div>
            <script>
                const inputs = document.querySelectorAll('.files'); 
                inputs.forEach(e=>{
                    e.addEventListener('input',({target})=>{
                        target.parentNode.querySelector('div').style.backgroundImage = `url('https://drive.google.com/uc?export=view&id=${target.value}')`;
                    })
                })
            </script>
        </div>
        <div class="species-button-group">
            <button onclick="sendData(<?php echo $id; ?>)">Cập nhật</button>
            <button onclick="document.location.href='./species.php'">Trở về</button>
        </div>
    </div>

    <script>
        function sendData(id) {
            let allData = document.querySelectorAll('[data]');
            let subData = document.querySelectorAll('[sub-data]');

            data = {
                'id': id,
                'tenkhoahoc': allData[0].value,
                'tentiengviet': allData[1].value,
                'tendiaphuong': allData[2].value,
                'ho': allData[3].value,
                'IUCN': allData[4].value,
                'VNRL': allData[5].value,
                'ND32': allData[6].value,
                'CITES': allData[7].value,
                'ddhinhthai': allData[8].value,
                'ddsinhthai': allData[9].value,
                'sinhcanh': allData[10].value,
                'coor1': allData[11].value,
                'coor2': allData[12].value,
                'coor3': allData[13].value,
                'coor4': allData[14].value,
                'coor5': allData[15].value,
                'diadiem': allData[16].value,
                'phanbo': allData[17].value,
                'gtsd': allData[18].value,
                'tinhtrangmauvat': allData[19].value,
                'ngaythumau': allData[20].value,
                'nguoithumau': allData[21].value,
                'hinh1': subData[0].value,
                'hinh2': subData[1].value,
                'hinh3': subData[2].value,
                'hinh4': subData[3].value,
                'hinh5': subData[4].value
            };

            var url = `../api/api-species.php`;
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data == '1') {
                        alert("Cập nhật thành công");
                        document.location.href = './species.php';
                    }
                })
        }
    </script>
</body>

</html>
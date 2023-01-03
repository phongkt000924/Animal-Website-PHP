<?php
require_once('../db/DBHelper.php');

/* ------ GET VALUES FOR KINGDOM ------ */
$sqlKD = 'SELECT * FROM kingdom';
$resultKD = executeResult($sqlKD);
$optionforKD = '';

foreach ($resultKD as $row) {
    $optionforKD = $optionforKD . '<option value="' . ($row['KINGDOM_ID']) . '">' . ($row['KINGDOM_NAME']) . '</option>';
}

/* ------ GET VALUES FOR PHYLUM ------ */
$sqlPL = 'SELECT * FROM phylum';
$resultPL = executeResult($sqlPL);
$optionforPL = '';

foreach ($resultPL as $row) {
    $optionforPL = $optionforPL . '<option value="' . ($row['PHYLUM_ID']) . '">' . ($row['PHYLUM_NAME']) . '</option>';
}

/* ------ GET VALUES FOR CLASS ------ */
$sqlCL = 'SELECT * FROM class';
$resultCL = executeResult($sqlCL);
$optionforCL = '';

foreach ($resultCL as $row) {
    $optionforCL = $optionforCL . '<option value="' . ($row['CLASS_ID']) . '">' . ($row['CLASS_NAME']) . '</option>';
}

/* ------ GET VALUES FOR ORDER ------ */
$sqlOD = 'SELECT * FROM orders';
$resultOD = executeResult($sqlOD);
$optionforOD = '';

foreach ($resultOD as $row) {
    $optionforOD = $optionforOD . '<option value="' . ($row['ORDERS_ID']) . '">' . ($row['ORDERS_NAME']) . '</option>';
}

/* ------ GET VALUES FOR FAMILY ------ */
$sqlFM = 'SELECT * FROM family';
$resultFM = executeResult($sqlFM);
$optionforFM = '';

foreach ($resultFM as $row) {
    $optionforFM = $optionforFM . '<option value="' . ($row['FAMILY_ID']) . '">' . ($row['FAMILY_NAME']) . '</option>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Taxonomy</title>
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
                    <div class="title">
                        <p class="subtitle active kingdom">KING DOM</p>
                        <p class="subtitle phylum">PHYLUM</p>
                        <p class="subtitle classs">CLASS</p>
                        <p class="subtitle order">ORDER</p>
                        <p class="subtitle family">FAMILY</p>
                    </div>
                    <div class="table-container">
                        <table class="custom-table show">

                        </table>
                    </div>

                </div>
                <div class="edit-area">
                </div>
            </div>
        </div>
    </div>

    <script>
        const subtitles = document.querySelectorAll('.subtitle');
        const customTables = document.querySelectorAll('.custom-table');

        subtitles.forEach((subtitle, index) => {
            subtitle.addEventListener('click', ({
                target
            }) => {

                subtitles.forEach((subtitle) => {
                    subtitle.classList.remove('active');
                })
                target.classList.add('active');
                let url = '';
                if (target.classList.contains('kingdom')) {
                    url = '../api/api-kingdom.php';
                    getData(url);
                } else if (target.classList.contains('phylum')) {
                    url = '../api/api-phylum.php';
                    getData(url);
                } else if (target.classList.contains('classs')) {
                    url = '../api/api-class.php';
                    getData(url);
                } else if (target.classList.contains('order')) {
                    url = '../api/api-order.php';
                    getData(url);
                } else if (target.classList.contains('family')) {
                    url = '../api/api-family.php';
                    getData(url);
                }
            })
        });

        function getData(url) {
            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    let thead = '';
                    let tbody = '';

                    const firstTH = data.firstTH == undefined ? '' : `<th>${data.firstTH}</th>`;
                    delete data.firstTH;

                    const secondTH = data.secondTH == undefined ? '' : `<th>${data.secondTH}</th>`;
                    delete data.secondTH;

                    const thirdTH = data.thirdTH == undefined ? '' : `<th>${data.thirdTH}</th>`;
                    delete data.thirdTH;

                    thead = `
                        <tr>
                            ${firstTH}
                            ${secondTH}
                            ${thirdTH}
                            <th></th>
                        </tr>
                    `;

                    let arr = Object.keys(data).map((k) => data[k])

                    arr.forEach((row) => {
                        let third = '';
                        if (row['third'] != undefined) {
                            third = `<td>${row['third']}</td>`;
                        }
                        tbody += `
                            <tr class="data-row">
                                <td>${row['first']}</td>
                                <td>${row['second']}</td>
                                ${third}
                                <td>
                                    <button class="edit-btn" onclick="edit(${row['first']}, '${firstTH}')">SỬA</button>
                                    <button class="edit-btn" onclick="xoa(${row['first']}, '${firstTH}')">XÓA</button>
                                </td>
                            </tr>
                        `
                    })

                    document.querySelector('.table-container').innerHTML = `
                                <table class="custom-table show">
                                    ${thead}
                                    ${tbody}
                                </table>
                            `;
                })
        }

        document.querySelector('.kingdom').click();

        function huy() {
            document.querySelector('.edit-area').style.top = '-100vh';
        }

        function luu(type) {
            const name = type.split('_')[0].toLowerCase();
            url = `../api/api-${name}.php`;
            // console.log(url);
            var sendValue = {};

            document.querySelectorAll('.input-value').forEach((input) => {
                sendValue[input.name] = input.value;
            })
            console.log(sendValue);
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(sendValue)
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    if (data == 1) {
                        huy();
                        alert('Update Success !!');
                    } else if (data == -1) {
                        huy();
                        alert('Update Failed !!');
                    }
                    if (name == 'class') {
                        document.querySelector('.classs').click();
                    } else document.querySelector(`.${name}`).click();
                })
                .catch(error => {
                    {
                        console.log(error);
                    }
                })
        }

        function edit(id, type) {
            const name = type.split('_')[0].substring(4).toLowerCase();

            url = `../api/api-${name}.php?id=${id}`;

            fetch(url)
                .then(response => response.json())
                .then((data) => {
                    const editArea = document.querySelector('.edit-area');

                    let extraInput = '';

                    if (data['thirdName'] != undefined) {
                        extraInput = `
                            <label for="">${data['thirdName']}</label>
                            <input class="input-value" type="text" name="${data['thirdName'].toLowerCase()}" value="${data['third']}">
                        `;
                    }

                    editArea.innerHTML = `
                        <div class="sub-title">
                            <h3>Bảng chỉnh sửa thông tin</h3>
                        </div>
                        <div class="personal-info">
                            <label for="">${data['firstName']} <small><i>(chỉ xem)</i></small></label>
                            <input class="input-value" type="text" name="${data['firstName'].toLowerCase()}" value="${data['first']}" readonly>
                            <label for="">${data['secondName']}</label>
                            <input class="input-value" type="text" name="${data['secondName'].toLowerCase()}" value="${data['second']}">
                            ${extraInput}
                            <input type="submit" value="Lưu" class="edit-btn" onclick=luu('${data['firstName']}')>
                            <input type="submit" value="Hủy" class="edit-btn" onclick="huy()">
                        </div>
                    `;
                    document.querySelector('.edit-area').style.top = '22vh';
                });
        }

        function addNew() {
            var subtitles = document.querySelectorAll('.subtitle');
            const editArea = document.querySelector('.edit-area');
            subtitles.forEach((subtitle, index) => {
                if (subtitle.classList.contains('active')) {
                    // console.log(subtitle, index);
                    if (subtitle.classList.contains('kingdom')) {
                        <?php
                        require_once('../db/DBHelper.php');
                        $maxid = executeSingleResult('select max(kingdom_id) from kingdom');
                        if ($maxid['max(kingdom_id)'] == NULL) {
                            $id = 1;
                        } else {
                            $id = $maxid['max(kingdom_id)'] + 1;
                        }
                        ?>
                        editArea.innerHTML = `
                        <div class="sub-title">
                            <h3>Thêm KING DOM</h3>
                        </div>
                        <div class="personal-info">
                            <label for="">KINGDOM_ID<small><i>(chỉ xem)</i></small></label>
                            <input name="kingdom_id" class="input-value" type="text" id="kingdom_id" value="<?php echo $id; ?>" data readonly>
                            <label for="">KINGDOM_NAME</label>
                            <input name="kingdom_name" class="input-value" type="text" id="kingdom_name" value="" data>
                            <input type="submit" value="Thêm" class="edit-btn" onclick=them('kingdom')>
                            <input type="submit" value="Hủy" class="edit-btn" onclick="huy()">
                        
                        </div>
                    `;
                        document.querySelector('.edit-area').style.top = '22vh';
                    } else if (subtitle.classList.contains('phylum')) {
                        // alert(2);
                        <?php
                        require_once('../db/DBHelper.php');
                        $maxid = executeSingleResult('select max(phylum_id) from phylum');
                        if ($maxid['max(phylum_id)'] == NULL) {
                            $id = 1;
                        } else {
                            $id = $maxid['max(phylum_id)'] + 1;
                        }
                        ?>
                        const options = '<?php echo $optionforKD ?>';
                        editArea.innerHTML = `
                            <div class="sub-title">
                                <h3>Thêm PHYLUM</h3>
                            </div>
                            <div class="personal-info">
                                <label for="">PHYLUM_ID<small><i>(chỉ xem)</i></small></label>
                                <input name="phylum_id" class="input-value" type="text" id="phylum_id" value="<?php echo $id; ?>" data readonly>
                                <label for="">PHYLUM_NAME</label>
                                <input name="phylum_name" class="input-value" type="text" id="phylum_name" value="" data>
                                <label for="">KINGDOM_NAME</label>
                                <select name="kingdom_id" id="" class="more-option" data>
                                    ${options}
                                </select>
                                <input type="submit" value="Thêm" class="edit-btn" onclick=them('phylum')>
                                <input type="submit" value="Hủy" class="edit-btn" onclick="huy()">
                            </div>
                    `;
                        document.querySelector('.edit-area').style.top = '22vh';

                    } else if (subtitle.classList.contains('classs')) {
                        // alert(3);
                        <?php
                        require_once('../db/DBHelper.php');
                        $maxid = executeSingleResult('select max(class_id) from class');
                        if ($maxid['max(class_id)'] == NULL) {
                            $id = 1;
                        } else {
                            $id = $maxid['max(class_id)'] + 1;
                        }
                        ?>
                        const options = '<?php echo $optionforPL ?>'
                        editArea.innerHTML = `
                        <div class="sub-title">
                            <h3>Thêm CLASS</h3>
                        </div>
                        <div class="personal-info">
                            <label for="">CLASS_ID<small><i>(chỉ xem)</i></small></label>
                            <input class="input-value" type="text" name="class_id" id="class_id" value="<?php echo $id; ?>" data readonly>
                            <label for="">CLASS_NAME</label>
                            <input class="input-value" type="text" name="class_name" id="class_name" value="" data>
                            <label for="">PHYLUM_NAME</label>
                            <select name="phylum_id" id="" class="more-option" data>
                                ${options}
                            </select>
                            <input type="submit" value="Thêm" class="edit-btn" onclick=them('class')>
                            <input type="submit" value="Hủy" class="edit-btn" onclick="huy()">
                        </div>
                        `;
                        document.querySelector('.edit-area').style.top = '22vh';

                    } else if (subtitle.classList.contains('order')) {
                        // alert(4);
                        <?php
                        require_once('../db/DBHelper.php');
                        $maxid = executeSingleResult('select max(orders_id) from orders');
                        if ($maxid['max(orders_id)'] == NULL) {
                            $id = 1;
                        } else {
                            $id = $maxid['max(orders_id)'] + 1;
                        }
                        ?>
                        const options = '<?php echo $optionforCL ?>'
                        editArea.innerHTML = `
                        <div class="sub-title">
                            <h3>Thêm ORDER</h3>
                        </div>
                        <div class="personal-info">
                            <label for="">ORDER_ID<small><i>(chỉ xem)</i></small></label>
                            <input class="input-value" type="text" name="order_id" id="order_id" value="<?php echo $id; ?>" data readonly>
                            <label for="">ORDER_NAME</label>
                            <input class="input-value" type="text" name="order_name" id="order_name" value="" data>
                            <label for="">CLASS_NAME</label>
                            <select name="class_id" id="" class="more-option" data>
                                ${options}
                            </select>
                            <input type="submit" value="Thêm" class="edit-btn" onclick=them('order')>
                            <input type="submit" value="Hủy" class="edit-btn" onclick="huy()">
                        </div>
                        `;
                        document.querySelector('.edit-area').style.top = '22vh';
                    } else if (subtitle.classList.contains('family')) {
                        // alert(5);
                        <?php
                        require_once('../db/DBHelper.php');
                        $maxid = executeSingleResult('select max(family_id) from family');
                        if ($maxid['max(family_id)'] == NULL) {
                            $id = 1;
                        } else {
                            $id = $maxid['max(family_id)'] + 1;
                        }
                        ?>
                        const options = '<?php echo $optionforOD; ?>'
                        editArea.innerHTML = `
                        <div class="sub-title">
                            <h3>Thêm FAMILY</h3>
                        </div>
                        <div class="personal-info">
                            <label for="">FAMILY_ID<small><i>(chỉ xem)</i></small></label>
                            <input class="input-value" type="text" name="family_id" id="family_id" value="<?php echo $id; ?>" data readonly>
                            <label for="">FAMILY_NAME</label>
                            <input class="input-value" type="text" name="family_name" id="family_name" value="" data>
                            <label for="">ORDER_NAME</label>
                            <select name="order_id" id="" class="more-option" data>
                                ${options}
                            </select>
                            <input type="submit" value="Thêm" class="edit-btn" onclick=them('family')>
                            <input type="submit" value="Hủy" class="edit-btn" onclick="huy()">
                        </div>
                        `;
                        document.querySelector('.edit-area').style.top = '22vh';
                    }

                }
            })
        }

        function them(type) {
            if (type == 'kingdom') {
                const allData = document.querySelectorAll('[data]');
                let sendData = {};
                let isValid = true;

                allData.forEach((data, index) => {
                    if (data.value == '') {
                        isValid = false;
                        return;
                    }

                    sendData[data.name] = data.value;
                })

                if (isValid) {
                    var url = '../api/api_taxonomy.php';

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(sendData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data == '1') {
                                window.location.reload();
                            }
                        });
                } else {
                    alert('Vui lòng nhập đầy đủ thông tin trước khi xác nhận !!');
                }
            } else if (type == 'phylum') {
                const allData = document.querySelectorAll('[data]');
                let sendData = {};

                let isValid = true;

                allData.forEach((data, index) => {
                    if (data.value == '') {
                        isValid = false;
                        return;
                    }
                    sendData[data.name] = data.value;
                })

                if (isValid) {
                    var url = '../api/api_taxonomy.php';

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(sendData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            // console.log(data);
                            if (data == '1') {
                                window.location.reload();
                            }
                        });
                } else {
                    alert('Vui lòng nhập đầy đủ thông tin trước khi xác nhận !!');
                }

            } else if (type == 'class') {
                // alert('3');
                const allData = document.querySelectorAll('[data]');
                let sendData = {};

                let isValid = true;

                allData.forEach((data, index) => {
                    if (data.value == '') {
                        isValid = false;
                        return;
                    }
                    sendData[data.name] = data.value;
                })

                if (isValid) {
                    var url = '../api/api_taxonomy.php';

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(sendData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            if (data == '1') {
                                window.location.reload();
                            }
                        });
                } else {
                    alert('Vui lòng nhập đầy đủ thông tin trước khi xác nhận !!');
                }
            } else if (type == 'order') {
                // alert('4');
                const allData = document.querySelectorAll('[data]');
                let sendData = {};

                let isValid = true;

                allData.forEach((data, index) => {
                    if (data.value == '') {
                        isValid = false;
                        return;
                    }
                    sendData[data.name] = data.value;
                })

                if (isValid) {
                    var url = '../api/api_taxonomy.php';

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(sendData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            console.log(data);
                            if (data == '1') {
                                window.location.reload();
                            }
                        });
                } else {
                    alert('Vui lòng nhập đầy đủ thông tin trước khi xác nhận !!');
                }
            } else if (type == 'family') {
                // alert('5');
                const allData = document.querySelectorAll('[data]');
                let sendData = {};

                let isValid = true;

                allData.forEach((data, index) => {
                    if (data.value == '') {
                        isValid = false;
                        return;
                    }
                    sendData[data.name] = data.value;
                })

                if (isValid) {
                    var url = '../api/api_taxonomy.php';

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(sendData)
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            if (data == '1') {
                                window.location.reload();
                            }
                        });
                } else {
                    alert('Vui lòng nhập đầy đủ thông tin trước khi xác nhận !!');
                }
            }
        }

        function xoa(id, type) {
            if (confirm('Bạn có chắc muốn xóa ?')) {
                const name = type.split('_')[0].substring(4).toLowerCase();
                var url = `../api/api-${name}.php?id=${id}&type=xoa`;
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data) {
                            if (name == 'class') {
                                document.querySelector('.classs').click();
                            } else {
                                document.querySelector(`.${name}`).click();
                            }
                        }else{
                            alert('Không thể xóa do phân cấp này còn chứa các phân cấp hoặc dữ liệu khác!')
                        }
                    })
            }
        }
    </script>
</body>

</html>
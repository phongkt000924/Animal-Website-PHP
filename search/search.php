<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BuffaPoo - Tìm kiếm</title>
    <link rel="icon" href="../logo/logo.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./search.css">
    <link rel="stylesheet" href="./navbar.css">
    <link rel="stylesheet" href="../CSS/footer.css">
</head>

<body>
    <!--navbar-->
    <nav class="navbar">
        <a class="logo" href="../home/home.php">
            <img src="../logo/LOGO_S.png" width=102px height=59.5px alt="">
        </a>

        <input type="checkbox" id="menu" />
        <label for="menu" class="menu">
            <img height="30px" width="30px" src="image/icon.png" /></img>
        </label>

        <ul id="ul">
            <li><a href="../home/home.php">HOME</a></li>
            <li><a href="./search.php">SEARCH</a></li>
            <li><a href="../about/about.php">ABOUT</a></li>
        </ul>
    </nav>

    <!-- tim kiem -->
    <div class="big-title">
    TÌM KIẾM
        <img src="./image/search_icon.png" width="60px" height="60px">
    </div>
    <!--SearchBox -->
    <div class="search-form">
        <div class="tab-button">
            <button id="quickSearch">Tìm nhanh</button>
            <button id="advanceSearch">Tìm nâng cao</button>
        </div>
        <div class="search-form-content">

            <div id="quickSearch_content">
                <select id="qs-select">
                    <option value="0">Tên</option>
                    <option value="1">Tên địa phương</option>
                    <option value="2">Tên tiếng Việt</option>
                    <option value="3">Tên khoa học</option>
                </select>
                <input type="text" id="qs-input">
                <input type="button" id="qs-button" value="Tìm kiếm">
            </div>

            <div id="advanceSearch_content">
                <div class="find-option">
                    <div class="ftitle">
                        Tìm tên theo
                    </div>
                    <div class="items">
                        <div class="fo-elem">
                            
                            <input type="radio" checked name="find_option" id="radio-1" value="0">
                            Vị trí ngẫu nhiên
                        </div>
                        <div class="fo-elem">
                            <input type="radio" name="find_option" id="radio-2" value="1">
                            Chính xác từ trái sang
                        </div>
                    </div>
                </div>
                <div class="taxonomic">
                    <div class="ftitle">
                        Phân cấp sinh học
                    </div>
                    <div class="items-taxo">
                        <div class="taxonomic-elem">
                            Giới:
                            <input list="kingdom">
                            <datalist name="" id="kingdom">
                                <!-- <option _id="%" value= "Không"> -->
                            </datalist>
                           <sup>(0)</sup>
                        </div>
                        <div class="taxonomic-elem">
                            Ngành:
                            <input list="phylum">
                            <datalist name="" id="phylum">
                                <!-- <option _id="%" value= "Không"> -->
                            </datalist>
                           <sup>(0)</sup>
                        </div>
                        <div class="taxonomic-elem">
                            Lớp:
                            <input list="class">
                            <datalist name="" id="class">
                                <!-- <option  _id="%" value= "Không"> -->
                            </datalist>
                           <sup>(0)</sup>
                        </div>
                        <div class="taxonomic-elem">
                            Bộ:
                            <input list="orders">
                            <datalist name="" id="orders">
                                <!-- <option  _id="%" value= "Không"> -->
                            </datalist>
                           <sup>(0)</sup>
                        </div>
                        <div class="taxonomic-elem">    
                            Họ:
                            <input list="family">
                            <datalist name="" id="family">
                                <!-- <option  _id="%" value= "Không"> -->
                            </datalist>
                           <sup>(0)</sup>
                        </div>
                        <div class="taxonomic-control">
                            Phân loại có thể tìm kiếm được.
                            <button onclick="reloadTaxonomic()" >Đặt lại</button>
                        </div>
                    </div>
                </div>
                <div class="redlist">
                    <div class="ftitle">
                        Mức độ bảo tồn
                    </div>
                    <div class="items-redlist">
                        <div class="redlist-elem">
                            Theo IUCN:
                            <!-- <input type="checkbox" name="" id="iucn"> -->
                            <select name="" id="iucn">
                                <option value="0">Tất cả</option>
                                <option value="!=">Có phân loại</option>
                                <option value="=">Không phân loại</option>
                            </select>
                        </div>
                        <div class="redlist-elem">
                            Sách đỏ Việt Nam:
                            <!-- <input type="checkbox" name="" id="vnrl"> -->
                            <select name="" id="vnrl">
                                <option value="0">Tất cả</option>
                                <option value="!=">Có phân loại</option>
                                <option value="=">Không phân loại</option>
                            </select>
                        </div>
                        <div class="redlist-elem">
                            Nghị định 32:
                            <!-- <input type="checkbox" name="" id="nd32"> -->
                            <select name="" id="nd32">
                                <option value="0">Tất cả</option>
                                <option value="!=">Có phân loại</option>
                                <option value="=">Không phân loại</option>
                            </select>
                        </div>
                        <div class="redlist-elem">
                           Theo Cites:
                            <!-- <input type="checkbox" name="" id="cites"> -->
                            <select name="" id="cites">
                                <option value="0">Tất cả</option>
                                <option value="!=">Có phân loại</option>
                                <option value="=">Không phân loại</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-search">
            <div>
                Sắp xếp:
            </div>
            <div class="order-search-container">
                <select name="" id="order-type">
                    <option value="0">Không</option>
                    <option value="species.VietnameseName">Tên tiếng Việt</option>
                    <option value="species.LocalName">Tên địa phương</option>
                    <option value="species.ScienceName">Tên khoa học</option>
                    <option value="i.iucn_id">Mức bảo tồn theo sách đỏ IUCN</option>
                    <option value="v.vnrl_id">Mức bảo tồn theo sách đỏ Việt Nam</option>
                    <option value="n.nd32_id">Mức bảo tồn theo Nghị định 32</option>
                    <option value="ci.cites_id">Mức bảo tồn theo sách đỏ Cites</option>
                </select>
                <select name="" id="order-direction">
                    <!-- <option value="0">Ngẫu nhiên</option> -->
                    <option value="asc">Tăng dần</option>
                    <option value="desc">Giảm dần</option>
                </select>
                <button onclick="resetAll()" >
                    Làm lại
                </button>
            </div>
        </div>
    </div>
    <div class="search-result">
        <div class="search-result-info">
            1200 kết quả đã được tìm thấy.
            <div class="search-result-color">
                <a class="src-elem level-4">An toàn</a>
                <a class="src-elem level-3">Bảo tồn</a>
                <a class="src-elem level-2">Nguy hiểm</a>
                <a class="src-elem level-1">Rất nguy hiểm</a>
            </div>
        </div>
        <div class="search-result-body">


            <!-- <div class="species">
                <div class="name level-4">
                    RỒNG TRẮNG MẮT XANH
                </div>
                <div class="main-info">

                    <div class="info">
                        <div class="sience-name">
                            <strong>Tên khoa học:</strong>
                            <div>White dragon with blue eyes</div>
                        </div>
                        <div class="local-name">
                            <strong>Tên địa phương:</strong>
                            <div>Thằn lằn mảng cầu</div>
                        </div>
                        <div class="habitat">
                            <strong>Môi trường sống:</strong>
                            <div>Rừng tràm đặc dụng, rừng dừa nước, rừng tràm khai thác</div>
                        </div>
                        <div class="classification">
                            Phân lớp: Thiên thể > Ánh sáng > Máu lạnh > Nhiệt Long > Thằn lằn
                        </div>
                    </div>
                    <img width="200" height="140"
                        src="https://thuthuatnhanh.com/wp-content/uploads/2020/10/hinh-anh-con-lon.jpg">
                    <div class="maps">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="250" height="140" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=10,106&t=k&z=7&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 140px;
                                        width: 250px;
                                    }
                                </style>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 140px;
                                        width: 250px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="species">
                <div class="name level-1">
                    RỒNG TRẮNG MẮT XANH
                </div>
                <div class="main-info">

                    <div class="info">
                        <div class="sience-name">
                            <strong>Tên khoa học:</strong>
                            <div>White dragon with blue eyes</div>
                        </div>
                        <div class="local-name">
                            <strong>Tên địa phương:</strong>
                            <div>Thằn lằn mảng cầu</div>
                        </div>
                        <div class="habitat">
                            <strong>Môi trường sống:</strong>
                            <div>Rừng tràm đặc dụng, rừng dừa nước, rừng tràm khai thác</div>
                        </div>
                        <div class="classification">
                            Phân lớp: Thiên thể > Ánh sáng > Máu lạnh > Nhiệt Long > Thằn lằn
                        </div>
                    </div>
                    <img width="200" height="140"
                        src="https://thuthuatnhanh.com/wp-content/uploads/2020/10/hinh-anh-con-lon.jpg">
                    <div class="maps">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="250" height="140" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=10,106&t=k&z=7&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 140px;
                                        width: 250px;
                                    }
                                </style>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 140px;
                                        width: 250px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
        <div id="showmore"><button onclick="showMore()">Xem thêm</button></div>
    </div>

    <script>
        const tab = document.getElementsByClassName("tab-button")[0]
        const btnArr = [...tab.getElementsByTagName("button")]
        const white = 'rgb(255, 255, 255)'
        const green = 'rgb(12, 145, 101)'
        const hover = 'rgb(196, 189, 189)'
        var isSelected = btnArr[0]
        btnArr.map((btn, index, arr) => {
            if (index == 0) {
                btn.style.background = green;
                btn.style.color = white;
            }
            else {
                btn.style.background = white;
                btn.style.color = green;
            }
        })
        for (let key in btnArr) {
            btnArr[key].onclick = () => {
                if (btnArr[key] !== isSelected) {
                    isSelected.style.background = white;
                    isSelected.style.color = green;
                    isSelected = btnArr[key]
                    isSelected.style.background = green;
                    isSelected.style.color = white;
                }
            };
            btnArr[key].onmouseenter = () => {
                if (btnArr[key] !== isSelected)
                    btnArr[key].style.background = hover
            };
            btnArr[key].onmouseleave = () => {
                if (btnArr[key] !== isSelected)
                    btnArr[key].style.background = white
            }
        }

        const quickSearch = document.querySelector("#quickSearch")
        const advanceSearch = document.querySelector("#advanceSearch")
        const quickSearch_content = document.querySelector("#quickSearch_content")
        const advanceSearch_content = document.querySelector("#advanceSearch_content")
   
        quickSearch.addEventListener("click", () => {
            // quickSearch_content.classList.remove('none')
            advanceSearch_content.classList.add('none')
            document.querySelector("#order-type").style.marginLeft = '10px';
        })
        advanceSearch_content.classList.add('none')
        advanceSearch.addEventListener("click", () => {
            // quickSearch_content.classList.add('none')
            advanceSearch_content.classList.remove('none')
            document.querySelector("#order-type").style.marginLeft = '86px';
        })



    </script>

    <script>
        const type_name = document.querySelector("#qs-select")
        const name = document.querySelector("#qs-input")
        const find = document.querySelector("#qs-button")
        const radio1 = document.querySelector("#radio-1")
        const radio2 = document.querySelector("#radio-2")

        const kingdom = document.querySelector("#kingdom")
        const phylum = document.querySelector("#phylum")
        const classs = document.querySelector("#class")
        const orders = document.querySelector("#orders")
        const family = document.querySelector("#family")

        const kingdom_text = document.querySelectorAll(".items-taxo input")[0]
        const phylum_text = document.querySelectorAll(".items-taxo input")[1]
        const classs_text = document.querySelectorAll(".items-taxo input")[2]
        const orders_text = document.querySelectorAll(".items-taxo input")[3]
        const family_text = document.querySelectorAll(".items-taxo input")[4]

        const iucn = document.querySelector("#iucn")
        const vnrl = document.querySelector("#vnrl")
        const nd32 = document.querySelector("#nd32")
        const cites = document.querySelector("#cites")

        const order_type = document.querySelector("#order-type")
        const order_direction = document.querySelector("#order-direction")

        const search_result = document.querySelector(".search-result-body")
        const search_count = document.querySelector(".search-result-info")

        var allClassification;

        find.addEventListener("click", ()=>{
            //Render cau lệnh theo tên
            let nameText = `%${name.value}%`
            if(radio2.checked){nameText = `${name.value}%`}
            let nameSql=` (species.VietnameseName like '${nameText}' or species.LocalName like '${nameText}' or species.ScienceName like '${nameText}')  `;
            if(type_name.value==1){
                nameSql=` species.LocalName like '${nameText}' `
            }else if(type_name.value==2){
                nameSql=` species.VietnameseName like '${nameText}' `
            }else if(type_name.value==3){
                nameSql=` species.ScienceName like '${nameText}' `
            }

            //Render CÂU LỆNH CHO PHẦN PHÂN LOẠI
            let classification = `and k.KINGDOM_NAME like '%${kingdom_text.value}%' and p.PHYLUM_NAME like '%${phylum_text.value}%' and c.CLASS_NAME like '%${classs_text.value}%' and o.ORDERS_NAME like '%${orders_text.value}%' and f.FAMILY_NAME like '%${family_text.value}%'`

            
            let iucnSql =  iucn.value != '0' ? ` and i.IUCN_ID ${iucn.value} (select max(iucn_id) from iucn) ` : ` `;
            let vnrlSql =  vnrl.value != '0' ? ` and v.VNRL_ID ${vnrl.value} (select max(vnrl_id) from vnrl) ` : ` `;
            let nd32Sql =  nd32.value != '0' ? ` and n.ND32_ID ${nd32.value} (select max(nd32_id) from nd32) ` : ` `;
            let citesSql = cites.value != '0' ? ` and ci.cites_ID ${cites.value} (select max(cites_id) from cites) ` : ` `;
            let redlist=iucnSql + vnrlSql + nd32Sql + citesSql;

            let order = ` `
            if(order_type.value != '0' && order_direction.value!=0){
                let order_param = order_direction.value == 0 ? ' ' : order_direction.value
                if(!order_type.value.includes('species'))
                    if(order_param == "asc") order_param = "desc"
                    else if(order_param == "desc") order_param = "asc"
                order = ` order by ${order_type.value} ${order_param} `
            }
            
            console.log(redlist)
            console.log(nameSql)
            console.log(classification)
            console.log(order)

            fetch('./post/search.php',{
                method:'POST',
                headers:{'Content-Type':'application/json'},
                body: JSON.stringify({
                    name: name.value,
                    nameSql,
                    classification,
                    redlist,
                    order
                }) 
            })
                .then(res => res.json())
                .then(data => {
                    console.log(data)
                    search_result.innerHTML="";
                    search_count.innerHTML=`${data.list.length} kết quả đã được tìm thấy.
                        <div class="search-result-color">
                            <a class="src-elem level-4">An toàn</a>
                            <a class="src-elem level-3">Bảo tồn</a>
                            <a class="src-elem level-2">Nguy hiểm</a>
                            <a class="src-elem level-1">Rất nguy hiểm</a>
                        </div>
                    `;
                    let staticUrl='../details/details.php?id='



                    data.list.forEach(e=>{
                        // console.log(e)
                        let srcimg=`src="https://drive.google.com/uc?export=view&id=${e[9]}">`;
                        let ggmap = `<div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe width="250" height="140" id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=${e[12]}&t=k&z=7&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                            </iframe>
                                            <style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    height: 140px;
                                                    width: 250px;
                                                }
                                            </style>
                                            <style>
                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    height: 140px;
                                                    width: 250px;
                                                }
                                            </style>
                                        </div>
                                    </div>`
                        let div = document.createElement("div")
                        // ggmap = '';
                        // srcimg=''
                        div.className="species none"
                        let inner = `
                            <div class="name level-${e[11]}">
                               <a href="${staticUrl}${e[0]}" target="_blank"> ${e[2]} </a>
                            </div>
                            <div class="main-info">
                                <div class="info">
                                    <div class="sience-name">
                                        <strong>Tên khoa học:</strong>
                                        <div>${e[1]}</div>
                                    </div>
                                    <div class="local-name">
                                        <strong>Tên địa phương:</strong>
                                        <div>${e[3]}</div>
                                    </div>
                                    <div class="habitat">
                                        <strong>Môi trường sống:</strong>
                                        <div>${e[10]}</div>
                                    </div>
                                    <div class="classification">
                                        Phân lớp: ${e[4].split('(')[0]} > ${e[5].split('(')[0]} > ${e[6].split('(')[0]} > ${e[7].split('(')[0]} > ${e[8].split('(')[0]}
                                    </div>
                                </div>
                                <img width="200" height="140"
                                    ${srcimg}
                                <div class="maps">
                                    ${ggmap}
                                </div>
                            </div>
                        `;
                        div.innerHTML=inner;
                        search_result.appendChild(div);
                    })
                    if(data.list.length > 10) {
                        document.getElementById("showmore").style.display = "flex";
                    }
                    document.getElementById("showmore").querySelector("button").click();
                })
        })

        function loadAllClassification(){
            fetch(`./post/getAllClassification.php`)
            .then(res => res.json())
            .then(data=>{
                allClassification = data;
                console.log(data)

                kingdom.parentNode.querySelector("sup").innerHTML = `(${data.kingdom.length})`
                phylum.parentNode.querySelector("sup").innerHTML = `(${data.phylum.length})`
                classs.parentNode.querySelector("sup").innerHTML = `(${data.class.length})`
                orders.parentNode.querySelector("sup").innerHTML = `(${data.orders.length})`
                family.parentNode.querySelector("sup").innerHTML = `(${data.family.length})`
                
                kingdom.innerHTML="";
                phylum.innerHTML="";
                classs.innerHTML="";
                orders.innerHTML="";
                family.innerHTML="";

                data.kingdom.forEach(e=>{
                    kingdom.innerHTML+=`<option _id='${e[0]}' value='${e[1]}'>`;
                })

                data.phylum.forEach(e=>{
                    phylum.innerHTML+=`<option value='${e[1]}' _id='${e[0]}' parentID='${e[2]}'>`;
                })

                data.class.forEach(e=>{
                    classs.innerHTML+=`<option _id='${e[0]}' value='${e[1]}' parentID='${e[2]}'>`;
                })

                data.orders.forEach(e=>{
                    orders.innerHTML+=`<option _id='${e[0]}' value='${e[1]}' parentID='${e[2]}'>`;
                })

                data.family.forEach(e=>{
                    family.innerHTML+=`<option _id='${e[0]}' value='${e[1]}' parentID='${e[2]}'>`;
                })

                // phylum.disabled=true;
                // classs.disabled=true;
                // order.disabled=true;
                // family.disabled=true;
            })
        }

        function loadCustomClassification(type,id){
            fetch('./post/getCustomClassification.php',{
                method:'POST',
                headers:{'Content-Type':'application/json'},
                body: JSON.stringify({
                    type:type,
                    id:id
                }) 
            })
            .then(res => res.json())
            .then(data=>{
                console.log(data)
                
                kingdom.parentNode.querySelector("sup").innerHTML =  `(${data.kingdom.length})`
                phylum.parentNode.querySelector("sup").innerHTML =  `(${data.phylum.length})`
                classs.parentNode.querySelector("sup").innerHTML = `(${data.class.length})`
                orders.parentNode.querySelector("sup").innerHTML =  `(${data.orders.length})`
                family.parentNode.querySelector("sup").innerHTML =  `(${data.family.length})`

                if(data.kingdom[0][0]==null){
                    if(data.kingdom.length == 1){
                        kingdom.parentNode.querySelector("sup").innerHTML ="(0)"
                    }else if(data.kingdom.length > 1){
                        kingdom.parentNode.querySelector("sup").innerHTML ="("+(data.kingdom.length-1)+")"
                    }
                }

                if(data.phylum[0][0]==null){
                    if(data.phylum.length == 1){
                        phylum.parentNode.querySelector("sup").innerHTML ="(0)"
                    }else if(data.phylum.length > 1){
                        phylum.parentNode.querySelector("sup").innerHTML ="("+(data.phylum.length-1)+")"
                    }
                }

                if(data.class[0][0]==null){
                    if(data.class.length == 1){
                        classs.parentNode.querySelector("sup").innerHTML ="(0)"
                    }else if(data.class.length > 1){
                        classs.parentNode.querySelector("sup").innerHTML ="("+(data.class.length-1)+")"
                    }
                }

                if(data.orders[0][0]==null){
                    if(data.orders.length == 1){
                        orders.parentNode.querySelector("sup").innerHTML ="(0)"
                    }else if(data.orders.length > 1){
                        orders.parentNode.querySelector("sup").innerHTML ="("+(data.orders.length-1)+")"
                    }
                }

                if(data.family[0][0]==null){
                    if(data.family.length == 1){
                        family.parentNode.querySelector("sup").innerHTML ="(0)"
                    }else if(data.family.length > 1){
                        family.parentNode.querySelector("sup").innerHTML ="("+(data.family.length-1)+")"
                    }
                }

                kingdom.innerHTML="";
                phylum.innerHTML="";
                classs.innerHTML="";
                orders.innerHTML="";
                family.innerHTML="";

                data.kingdom.forEach(e=>{
                    kingdom.innerHTML+=`<option _id='${e[0]}' value='${e[1]}'>`;
                })

                data.phylum.forEach(e=>{
                    if(e[1]!=null) phylum.innerHTML+=`<option value='${e[1]}' _id='${e[0]}' parentID='${e[2]}'>`;
                })

                data.class.forEach(e=>{
                    if(e[1]!=null) classs.innerHTML+=`<option _id='${e[0]}' value='${e[1]}' parentID='${e[2]}'>`;
                })

                data.orders.forEach(e=>{
                    if(e[1]!=null) orders.innerHTML+=`<option _id='${e[0]}' value='${e[1]}' parentID='${e[2]}'>`;
                })

                data.family.forEach(e=>{
                    if(e[1]!=null) family.innerHTML+=`<option _id='${e[0]}' value='${e[1]}' parentID='${e[2]}'>`;
                })

                //remove input text
                if(type=='kingdom'){
                    phylum_text.value="";
                    classs_text.value="";
                    orders_text.value="";
                    family_text.value="";

                    phylum_text.className=""
                    classs_text.className=""
                    orders_text.className=""
                    family_text.className=""
                }else if(type=='phylum'){
                    classs_text.value="";
                    orders_text.value="";
                    family_text.value="";

                    classs_text.className=""
                    orders_text.className=""
                    family_text.className=""
                }else if(type=='class'){
                    orders_text.value="";
                    family_text.value="";

                    orders_text.className=""
                    family_text.className=""
                }else if(type=='orders'){
                    family_text.value="";

                    family_text.className=""
                }

                //set selected
                if(type=='phylum'){
                    kingdom_text.value=kingdom.childNodes[0].value
                    kingdom_text.className="invaild"
                }else if(type=='class'){
                    kingdom_text.value=kingdom.childNodes[0].value
                    phylum_text.value=phylum.childNodes[0].value
                    kingdom_text.className="invaild"
                    phylum_text.className="invaild"
                }else if(type=='orders'){
                    kingdom_text.value=kingdom.childNodes[0].value
                    phylum_text.value=phylum.childNodes[0].value
                    classs_text.value=classs.childNodes[0].value
                    kingdom_text.className="invaild"
                    phylum_text.className="invaild"
                    classs_text.className="invaild"
                }else if(type=='family'){
                    kingdom_text.value=kingdom.childNodes[0].value
                    phylum_text.value=phylum.childNodes[0].value
                    classs_text.value=classs.childNodes[0].value
                    orders_text.value=orders.childNodes[0].value
                    kingdom_text.className="invaild"
                    phylum_text.className="invaild"
                    classs_text.className="invaild"
                    orders_text.className="invaild"
                }
                showInfo()
            })
        }

        function setInputEvent(){
            kingdom_text.addEventListener("input",(e)=>{
                if(e.target.value.length > 0){
                    checkInput(e.target)
                }else{
                    e.target.className=""
                }
                showInfo()
            })
            phylum_text.addEventListener("input", (e)=>{
                if(e.target.value.length > 0){
                    checkInput(e.target)
                }else{
                    e.target.className=""
                }
                showInfo()
            })
            classs_text.addEventListener("input", (e)=>{
                if(e.target.value.length > 0){
                    checkInput(e.target)
                }else{
                    e.target.className=""
                }
                showInfo()
            })
            orders_text.addEventListener("input", (e)=>{
                if(e.target.value.length > 0){
                    checkInput(e.target)
                }else{
                    e.target.className=""
                }
                showInfo()
            })
            family_text.addEventListener("input", (e)=>{
                if(e.target.value.length > 0){
                    checkInput(e.target)
                }else{
                    e.target.className=""
                }
                showInfo()
            })
        }

        function checkInput(input){
            
            // let check = allClassification[input.getAttribute("list")].find(e=>(
            //     (
            //         (e[1].charAt(0) === input.value.charAt(0))
            //         ||
            //         (e[1].charAt(0).toLowerCase() === input.value.charAt(0))
            //     )
            //     && 
            //     (   (e[1].indexOf(input.value) !== -1) 
            //         || 
            //         ((e[1].toLowerCase()).indexOf(input.value) !== -1)
            //     )
            // ))

            let check = allClassification[input.getAttribute("list")].find(e=>(
                (e[1] === input.value)
                ||
                (e[1].toLowerCase() === input.value)
            ))
            // if(typeof(check)=='undefined') return false;
            // else return true;
            if(typeof(check)!='undefined') {
                input.className="invaild"
                loadCustomClassification(input.getAttribute("list"),input.value)
            }else{
                input.className="illegal"
            }
        }

        function reloadTaxonomic(){
            loadAllClassification();
            kingdom_text.className="";
            phylum_text.className="";
            classs_text.className="";
            orders_text.className="";
            family_text.className="";

            kingdom_text.value="";
            phylum_text.value="";
            classs_text.value="";
            orders_text.value="";
            family_text.value="";

            document.querySelector(".taxonomic-control").innerHTML=`Phân loại có thể tìm kiếm được.
                            <button onclick="reloadTaxonomic()" >Đặt lại</button>`;
            document.querySelector(".taxonomic-control").style.color="gray"
        }

        function showMore(){
            let noneList = search_result.querySelectorAll(".none")
            if(noneList.length <= 10){
                document.getElementById("showmore").style.display = "none";
            }
            let max = noneList.length > 10 ? 10 : noneList.length
            for(i=0;i<max;i++){
                noneList[i].classList.remove("none");
            }
        }

        function showInfo(){//Hien thông báo
            if(document.querySelectorAll(".illegal").length == 0) {
                document.querySelector(".taxonomic-control").innerHTML=`Phân loại có thể tìm kiếm được.
                            <button onclick="reloadTaxonomic()" >Đặt lại</button>`;
                document.querySelector(".taxonomic-control").style.color="gray"
            }
            else{
                document.querySelector(".taxonomic-control").innerHTML=`Phân lớp không hợp lệ.
                            <button onclick="reloadTaxonomic()" >Đặt lại</button>`;
                document.querySelector(".taxonomic-control").style.color="red"
            }
        }

        function resetAll(){
            reloadTaxonomic()
            name.value = ""
            radio1.checked
            iucn.value ='0'
            vnrl.value ='0'
            nd32.value ='0'
            cites.value ='0'
            order_type.value ='0'
            order_direction.value ="asc";
        }

        function getTable(table,khoangoai,id){
            fetch(`./post/getClassification.php?table=${table}&khoangoai=${khoangoai}&id=${id}`)
            .then(res => res.json())
            .then(data=>{
                console.log(data)
                return data;
            })
        }

        setInputEvent()
        loadAllClassification();
        

        let keyword = new URL(window.location.href).searchParams.get('search');
        console.log(keyword)
        if(keyword != null){
            document.getElementById("qs-input").value=keyword
            find.click()
        }else{
            find.click()
        }

        document.getElementById("qs-input").addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                find.click()
            }
        });

    </script>


    <div class="footer">
        <div class="row">
            <div class="slogan">
                <div class="logo-img">
                    <img src="../image/LOGO.png" alt="">
                </div>
            </div>
            <div class="footer-icon">
                <div class="footer-icon-item">
                    <ion-icon name="logo-facebook"></ion-icon>
                    Facebook &nbsp
                </div>
                <div class="footer-icon-item">
                    <ion-icon name="logo-twitter"></ion-icon>
                    Twitter &nbsp
                </div>
                <div class="footer-icon-item">
                    <ion-icon name="logo-youtube"></ion-icon>
                    Youtube &nbsp
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Hack1nCradle</p>
    </div>

</body>

</html>

<!-- <form type type="submit">
    <select name="search_type" id="">
        <option value="Name">Name</option>
    </select>
    <input type="text" name="search_value">
    <input type="submit" name="search_button" value="SEARCH">
</form> -->
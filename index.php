<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
    <link rel="icon" type="image/x-icon" href="icons8-earth-100.png" />

</head>

<body>
    <table>
        <tr id="dong_dau_1">
            <th>TT</th>
            <th>Số CMND</th>
            <th>Tên chủ</th>
            <th>Năm sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
        </tr>
        <tr>
            <td>1</td>
            <td>036000007741</td>
            <td class="can_trai">Nguyễn Đình Quân</td>
            <td>1999</td>
            <td>Nam</td>
            <td class="can_trai">Chương Mỹ, Hà Nội</td>
        </tr>
        <tr>
            <td>2</td>
            <td>036000991542</td>
            <td class="can_trai">Lò Bát Quái</td>
            <td>1000</td>
            <td>Nam</td>
            <td class="can_trai">Hà Đông, Hà Nội</td>
        </tr>
        <tr>
            <td>3</td>
            <td>036955452142</td>
            <td class="can_trai">Đỗ Rê Mon</td>
            <td>1995</td>
            <td>Nam</td>
            <td class="can_trai">Bỉm Sơn, Ninh Bình</td>
        </tr>
    </table>
    <br>
    <form action="/action_page.php" id="form">
        <fieldset id="fieldset">
            <legend>Chọn và nhập thông tin cần tìm:</legend>
            <input class="radio" type="radio">
            <label class="text_fieldset" for="">Thửa số: </label>
            <input type="text" placeholder="Nhập số thửa" id="so_thua">
            <label class="text_fieldset" for="">Tờ số: </label>
            <input type="number" placeholder="Nhập số tờ" id="so_to">
            <br><br>
            <input class="radio" type="radio">
            <label class="text_fieldset" for="">Loại đất: </label>
            <input type="text" placeholder="Nhập loại đất" id="loai_dat">
            <button id="button">Tìm</button><br><br>
        </fieldset>
    </form>
    <br>
    <table>
        <tr id="dong_dau_2">
            <th>Tờ số</th>
            <th>Thửa số</th>
            <th>Diện tích</th>
            <th>Loại đất</th>
            <th>Tên chủ</th>
            <th>Pháp lý</th>
            <th>Cập nhật</th>
        </tr>
        <tr>
            <td>10</td>
            <td>175</td>
            <td>73.2 m<sup>2</sup></td>
            <td>OTD</td>
            <td class="can_trai">Nguyễn Đình Quân</td>
            <td>Đã cấp GCN</td>
            <td>
                <a href="https://www.google.com.vn/index.html">Sửa |</a>
                <a href="https://www.google.com.vn/index.html"> Xoá</a>
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>175</td>
            <td>713.2 m<sup>2</sup></td>
            <td>CLN</td>
            <td class="can_trai">Nguyễn Đình Mạnh</td>
            <td>Đã cấp GCN</td>
            <td>
                <a href="https://www.google.com.vn/index.html">Sửa |</a>
                <a href="https://www.google.com.vn/index.html"> Xoá</a>
            </td>
        </tr>
        <tr>
            <td>18</td>
            <td>175</td>
            <td>333.2 m<sup>2</sup></td>
            <td>HNK</td>
            <td class="can_trai">Nguyễn Đình Hà</td>
            <td>Chưa cấp GCN</td>
            <td>
                <a href="https://www.google.com.vn/index.html">Sửa |</a>
                <a href="https://www.google.com.vn/index.html"> Xoá</a>
            </td>
        </tr>
        <tr>
            <td colspan="7" id="dong_cuoi">Tổng số tờ: 2, Tổng số thửa: 3, Tổng diện tích:1833 m<sup>2</sup>
            </td>
        </tr>
    </table>
    <style>
    #fieldset {
        border: 2px solid gray;
    }

    #button {
        margin-left: 45px;
    }

    table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
        font-family: Arial;
    }

    #dong_cuoi {
        text-align: left;
        font-style: italic;
    }

    #dong_dau_2 {
        background-color: pink;
    }

    .can_trai {
        text-align: left;

    }

    .text_fieldset {
        color: blue;
    }

    #dong_dau_1 {
        background: yellow;
    }
    </style>
</body>

</html>
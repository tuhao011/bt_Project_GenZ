<?php
require_once 'ketnoi.php';

$isTrue = true;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['price'])) {
        $price = intval($_POST['price']);
        if ($price <= 0) {
            echo "<div class='error'>Giá phải lớn hơn 0</div>";
            $isTrue = false;
        }
    }

    if (isset($_POST['brands'])) {
        $brand = $_POST['brands'];
    }
    if (isset($_POST['nameproduct'])) {
        $nameproduct = $_POST['nameproduct'];
    }
    if (isset($_POST['specproduct'])) {
        $specproduct = $_POST['specproduct'];
    }
    if (isset($_POST['promotion'])) {
        $promotion = $_POST['promotion'];
    }
    if (isset($_POST['categorys'])) {
        $category = $_POST['categorys'];
    }
    // $desc = implode(",", [$_POST['xuatxu'], $_POST['material'], $_POST['lengthh'], $_POST['color']]));
    // $price = $_POST['price']);
    if (isset($_POST['xuatxu'])) {
        $desc = $_POST['xuatxu'];
    }

    if (isset($_FILES['img1']) && $_FILES['img1']['error'] == UPLOAD_ERR_OK) {
        $fileImg1 = $_FILES['img1']['name'];
        $tempImg1 = $_FILES['img1']['tmp_name'];
    }

    if (!empty($fileImg1)) {
        $location = "hinh_sp/";
        if (!move_uploaded_file($tempImg1, $location . $fileImg1)) {
            echo "<div class='error'>Upload không thành công</div>";
            $isTrue = false;
        }
    }

    if (isset($_FILES['img2']) && $_FILES['img2']['error'] == UPLOAD_ERR_OK) {
        $fileImg2 = $_FILES['img2']['name'];
        $tempImg2 = $_FILES['img2']['tmp_name'];
    }

    if (!empty($fileImg2)) {
        $location = "hinh_sp/";
        if (!move_uploaded_file($tempImg2, $location . $fileImg2)) {
            echo "<div class='error'>Upload không thành công</div>";
            $isTrue = false;
        }
    }

    if (isset($_POST['color'])) {
        $images = $_POST['color'];
    }

    // if ($isTrue) {
    $sql = "INSERT INTO `product`(`id`, `point`, `images`, `ratingstar`, `promotion`, `category`, `specname`, `name`, `desc`, `price`) VALUES (NULL, 0, '$images', 0, '$promotion', '$category', '$specproduct', '$nameproduct', '$desc', '$price')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: Thêm dữ liệu không thành công - " . mysqli_error($conn);
    }
// }
?>
<?php 
include 'admin_leftside.html';
include 'add_product.html';
?>
<script>
        const select_category = document.getElementById('categorys');
        const select_meterial = document.getElementById('material');
        const select_length = document.getElementById('length');
        const conten = document.querySelectorAll(".content");
        const left_side = document.querySelectorAll(".left-side");
        // Ẩn select_meterial ban đầu
        select_meterial.style.display = 'inline';

        select_category.addEventListener('change', function() {
            if (select_category.value === 'Quần') {
                // Nếu người dùng chọn "Quần", hiển thị các tùy chọn áo và ẩn các tùy chọn quần
                select_meterial.style.display = 'inline';
                select_length.style.display = 'inline';
                if (left_side.style.display == 'block'){
                    conten.style.display = 'block';
                    conten.style.width = '100%';
                }
                // Đặt các tùy chọn quần thành ẩn
                Array.from(select_meterial.options).forEach(option => {
                    if (option.value === 'Kaki' || option.value === 'jean' || option.value === 'Len') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
                Array.from(select_length.options).forEach(option => {
                    if (option.value === 'Quần dài' || option.value === 'Quần ngắn') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
            } else if (select_category.value === 'Sơ mi') {
                // Nếu người dùng chọn "Sơ mi", hiển thị các tùy chọn quần và ẩn các tùy chọn áo sơ mi
                select_meterial.style.display = 'inline';
                // Đặt các tùy chọn áo sơ mi thành ẩn
                Array.from(select_meterial.options).forEach(option => {
                    if (option.value === 'Cotton' || option.value === 'Nhung tăm'|| option.value === 'Lụa') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
                Array.from(select_length.options).forEach(option => {
                    if (option.value === 'Tay dài' || option.value === 'Tay ngắn') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
            } else if (select_category.value === 'Áo polo') {
                // Nếu người dùng chọn "Áo polo", hiển thị các tùy chọn quần và ẩn các tùy chọn áo polo
                select_meterial.style.display = 'inline';
                // Đặt các tùy chọn áo polo thành ẩn
                Array.from(select_meterial.options).forEach(option => {
                    if (option.value === 'Polyester' || option.value === 'Cotton') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
                Array.from(select_length.options).forEach(option => {
                    if (option.value === 'Tay dài' || option.value === 'Tay ngắn') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
            } else if (select_category.value === 'Áo phông') {
                // Nếu người dùng chọn "Áo phông", hiển thị các tùy chọn quần và ẩn các tùy chọn áo phông
                select_meterial.style.display = 'inline';
                // Đặt các tùy chọn áo phông thành ẩn
                Array.from(select_meterial.options).forEach(option => {
                    if (option.value === 'Bông' || option.value === 'Lụa' || option.value === 'Cotton') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
                Array.from(select_length.options).forEach(option => {
                    if (option.value === 'Tay dài' || option.value === 'Tay ngắn') {
                        option.style.display = 'inline';
                    } else {
                        option.style.display = 'none';
                    }
                });
            } else {
                select_meterial.style.display = 'none'; // Ẩn select_meterial nếu không có lựa chọn hợp lệ
            }
        });

    </script>

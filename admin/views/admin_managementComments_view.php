<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="../public/css/admin_border.css">
</head>
<body>
    <?php include_once "admin_temp.php"; ?>
    <div class="content_left">
        <div class="label_left">Quản lý bình luận</div>
        <br>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>comment_id</th>
                        <th>product_id</th>
                        <th>user_id</th>
                        <th>Nội dung</th>
                        <th>Thời gian</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                            <td><?php echo $comment['comment_id']; ?></td>
                            <td><?php echo $comment['product_id']; ?></td>
                            <td><?php echo $comment['user_id']; ?></td>
                            <td><?php echo $comment['comment']; ?></td>
                            <td><?php echo $comment['datetime']; ?></td>
                            <td>
                                <a href="../views/admin_deleteComment_view.php?id=<?php echo $comment['comment_id']; ?>"><button class="delete" type="submit">Xóa</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

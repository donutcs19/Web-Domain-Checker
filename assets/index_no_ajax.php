<?php require_once("./fetch_API.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/x-icon" href="./favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <title>Check URLs</title>

</head>

<body style="font-family:Courier, monospace">

    <div class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li style="float:right"><a class="active" href="#about">About</a></li>
        </ul>
    </div>

    <h1 style="text-align:center">URLs Checker</h1>

    <form id="urlForm" method="POST"></form>
    <div class="url">
        <textarea name="urls" id="urls" placeholder="Enter up to 100 URLs. One Url per line"></textarea>
    </div>
    <div class="c-btn">
        <button class="btn" type="submit" id="submitBtn">Check</button>
    </div>

    <div class="table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>URL</th>
                    <th>Full_URL</th>
                    <th>Index_URL</th>
                    <th>Name</th>
                    <th>Full_Name</th>
                    <th>Index_URL</th>
                    <th>Create</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>


                <?php if (!empty($response)): ?>
                    <?php $data_array = json_decode($response, true);
                    foreach ($data_array['data'] as $item) {

                        $id = $item['id'];
                        $domain = $item['domain'];
                        $full_index_url = $item['full_index_url'];
                        $index_url = $item['index_url'];
                        $name = $item['name'];
                        $full_index_name = $item['full_index_name'];
                        $index_name = $item['index_name'];
                        $create_at = $item['create_at'];
                        $update_at = $item['update_at']; ?>

                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $domain ?></td>
                            <td><?php if ($full_index_url != NULL) {
                                    echo $full_index_url;
                                } else { ?> กำลังค้นหาข้อมูล...<?php } ?></td>
                            <td align="center"><?php if ($index_url  == 'true') { ?>
                                    <img src="./img/true.png" alt="true" width="30">
                                <?php } else if ($index_url  == 'false') { ?>
                                    <img src="./img/false.png" alt="false" width="30">
                                <?php } else { ?>
                                    <img src="./img/search.png" alt="กำลังหาข้อมูล" width="30">
                                <?php } ?>
                            <td><?php echo $name ?></td>
                            <td><?php if ($full_index_name != NULL) {
                                    echo $full_index_name;
                                } else { ?> กำลังค้นหาข้อมูล...<?php } ?></td>
                            <td align="center"><?php if ($index_name  == 'true') { ?>
                                    <img src="./img/true.png" alt="true" width="30">
                                <?php } else if ($index_name  == 'false') { ?>
                                    <img src="./img/false.png" alt="false" width="30">
                                <?php } else { ?>
                                    <img src="./img/search.png" alt="กำลังหาข้อมูล" width="30">
                                <?php } ?>
                            </td>
                            <td><?php echo $create_at ?></td>
                            <td><?php echo $update_at ?></td>
                        </tr>


                    <?php } ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">ไม่มีข้อมูล</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


</body>
<script src="./Send_API.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "order": [
                [0, 'desc']
            ]
        });
    });
</script>


</html>
<?php
include('../../includes/header.php');
include("../../includes/db.php");
?>
<?php if (isset($_GET['message'])) { ?>
<div class="message-container bg-success bg-gradient p-4">
    <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
    <p class="text-center text-light p-2">
        <?php echo $_GET['message']; ?>
    </p>
</div>
<?php } ?>
<div class="container">
    <div class="row-mt-5">
        <?php
        include '../../includes/updatesdgdd/ddsdg3.php';
        ?>

        <!--res 3.1.1-->
        <div class=" w-100 h-auto mt-3" id="research311" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year Publication</th>
                        <th scope="col">Number of Clinical Citations</th>
                        <th scope="col">Total number of citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res311 = $row['ID'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $yearPub = $row['yearPub'];
                            $no_clinical = $row['no_clinical'];
                            $no_citations = $row['no_citation'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res311 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg3/update/update311.php?update=<?php echo $id_res311 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $title ?></td>
                        <td class="text-center"><?php echo $author ?></td>
                        <td class="text-center"><?php echo $yearPub ?></td>
                        <td class="text-center"><?php echo $no_clinical ?></td>
                        <td class="text-center"><?php echo $no_citations ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.1-->
        <div class=" w-100 h-auto mt-3" id="research321" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Name of health institution</th>
                        <th scope="col">Categorized as local, national, global</th>
                        <th scope="col">Number of years in collaboration</th>
                        <th scope="col">Title and description of collab project</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res321 = $row['ID'];
                            $name_health_institute = $row['name_health_institute'];
                            $categ = $row['categ'];
                            $no_year_collab = $row['no_year_collab'];
                            $title_project = $row['title_project'];
                            $cost = $row['cost'];
                            $fund = $row['fund'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../admin/orders.php?delete=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../admin/orders.php?view=<?php echo $id ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $name_health_institute ?></td>
                        <td class="text-center"><?php echo $categ ?></td>
                        <td class="text-center"><?php echo $no_year_collab ?></td>
                        <td class="text-center"><?php echo $title_project ?></td>
                        <td class="text-center"><?php echo $cost ?></td>
                        <td class="text-center"><?php echo $fund ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
var btn_res311 = document.getElementById("res311");
var btn_res321 = document.getElementById("res321");
var div_res311 = document.getElementById("research311");
var div_res321 = document.getElementById("research321");

btn_res311.addEventListener('click', () => {
    div_res311.style.display = "block";
    div_res321.style.display = "none";
});
btn_res321.addEventListener('click', () => {
    div_res321.style.display = "block";
    div_res311.style.display = "none";
});

//for exit in message
document.addEventListener("DOMContentLoaded", function() {
    var closeBtn = document.getElementById("closeBtn");

    if (closeBtn) {
        closeBtn.addEventListener("click", function(event) {
            event.preventDefault();
            var messageContainer = document.querySelector(".message-container");
            messageContainer.style.display = "none";
            window.location.href = "up_delsdg3.php";
        });
    }
});
</script>
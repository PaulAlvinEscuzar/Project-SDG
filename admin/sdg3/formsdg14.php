<?php include('../../includes/header.php');
include '../../includes/db.php';?>


<?php if (isset($_GET['message'])) { ?>
            <p class="text-center bg-success bg-gradient text-light p-4"><?php echo $_GET['message']; ?></p>
        <?php } ?>
<div class="container mt-5 mb-5">
    <div class="row-mt-5">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pick a research
            </button>
            <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res511"> Land on chuchu</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res521"> Current
                        collaborations
                        with health institutions</button></li>
                        <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res531"> Land</button></li>

            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 3.1.1-->
                    <div class="collapse w-100 h-auto" id="research511" style="display: block;">
                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                        <form action="../../admin/sdg3/insert/insert.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the Research" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of clinical citations" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of Citations" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 3.2.1-->
                    <div class=" w-100 h-auto" id="research521" style="display: none;">
                        <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class=" w-100 h-auto" id="research531" style="display: none;">
                        <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //button
    var btn_res511 = document.getElementById("res511");
    var btn_res521 = document.getElementById("res521");
    var btn_res531 = document.getElementById("res531");
    
    //div
    var div_res511 = document.getElementById("research511");
    var div_res521 = document.getElementById("research521");
    var div_res531 = document.getElementById("research531");

    btn_res511.addEventListener('click', () => {
        div_res511.style.display = "block";
        div_res521.style.display = "none";
        div_res531.style.display = "none";
    });

    btn_res521.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "block";
        div_res531.style.display = "none";
    });

    btn_res531.addEventListener('click', () => {
        div_res511.style.display = "none";
        div_res521.style.display = "none";
        div_res531.style.display = "block";
    });
</script>
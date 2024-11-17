<?php
$pageTitle = "Brands";
?>
<body>
    <div class="content-container">
        <h1>Brands</h1>
        
        <div class="col-auto">
            <?php
            include "view-brands-newform.php";
            ?>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr style="color: white;">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Origin</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($brand = $brands->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($brand['brand_id']); ?></td>
                            <td><?= htmlspecialchars($brand['brand_name']); ?></td>
                            <td><?= htmlspecialchars($brand['brand_origin']); ?></td>
                            <td><a href="brands-by-ceo.php?id=<?= htmlspecialchars($brand['brand_id']); ?>">CEO</a></td>
                            <td>
                                <?php
                                include "view-brands-editform.php";
                                ?>
                            </td>
                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="bid" value="<?= htmlspecialchars($brand['brand_id']); ?>">
                                    <input type="hidden" name="actionType" value="Delete">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                                            <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293z"/>
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-vkFHwyxEd+fNItuOe6fEpGpdfH1A1Zgq3RRD+x4+2l6Cqf5rAxfjqPEH/hdbIWLn" crossorigin="anonymous"></script>
</body>

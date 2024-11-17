<?php
$pageTitle = "Brands";
?>
<body>
<div class="content-container">
    <h1>Brands</h1>
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
                    <td><a href="brands-by-stores.php?id=<?= htmlspecialchars($brand['brand_id']); ?>">Stores</a></td>
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

<?php
$pageTitle = "CEOs";
?>
<body>
    <div class="content-container">
        <h1>CEOs</h1>
        
        <div class="col-auto" style="display: flex; flex-direction: row; justify-content: right; align-items: center;">
            <?php
            include "view-ceos-newform.php";
            ?>
        </div>
    </br>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr style="color: white;">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Brand ID</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($ceo = $ceos->fetch_assoc()) {
                    ?>
                        <tr style="vertical-align: middle;">
                            <td><?= htmlspecialchars($ceo['ceo_id']); ?></td>
                            <td><?= htmlspecialchars($ceo['ceo_name']); ?></td>
                            <td><?= htmlspecialchars($ceo['ceo_age']); ?></td>
                            <td><?= htmlspecialchars($ceo['brand_id']); ?></td>
                            <td>
                                <?php
                                include "view-ceos-editform.php";
                                ?>
                            </td>
                            <td style="display: flex; align-items: center; justify-content: center;">
                              <span style="display: flex; align-items: center;">  <form method="post" action="">
                                  <input type="hidden" name="cid" value="<?= htmlspecialchars($ceo['ceo_id']); ?>">
                                  <input type="hidden" name="actionType" value="Delete">
                                  <button type="submit" class="btn btn-danger btn-sm" style="width: 40px; height: 40px;" onclick="return confirm('Are you sure?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x"   
                             viewBox="0 0 16 16">
                                      </svg>
                                  </button>
                                </form>
                              </span>
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

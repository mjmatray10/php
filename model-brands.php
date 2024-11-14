<?php
function selectBrands() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT brand_id, brand_name, brand_origin FROM brand");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

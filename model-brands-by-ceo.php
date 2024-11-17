<?php
function selectBrandsByCeos($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.ceo_id, c.ceo_name, c.ceo_age FROM brand b JOIN ceo c ON b.brand_id = c.brand_id WHERE c.brand_id = ?");
        $stmt->bind_param("i", $bid);
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

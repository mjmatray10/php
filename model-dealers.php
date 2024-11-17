<?php
function selectDealers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT dealer_id, dealer_name, dealer_ok FROM dealer");
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

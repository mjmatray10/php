<?php
function selectCeos() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ceo_id, ceo_name, ceo_age, brand_id FROM ceo");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCeos($cName, $cAge, $cbrandid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `ceo` (`ceo_name`, `ceo_age`, `brand_id`) VALUES (?,?,?)");
        $stmt->bind_param("sii", $cName, $cAge, $cbrandid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCeos($cName, $cAge, $cbrandid, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `ceo` set `ceo_name` = ?, `ceo_age` = ?, `brand_id` = ? where ceo_id = ?");
        $stmt->bind_param("siii", $cName, $cAge, $cbrandid, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCeos($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from ceo where ceo_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

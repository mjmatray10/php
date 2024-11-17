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

function insertBrands($bName, $bOrigin) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `brand` (`brand_name`, `brand_origin`) VALUES (?,?)");
        $stmt->bind_param("ss", $bName, $bOrigin);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBrands($bName, $bOrigin, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `brand` set `brand_name` = ?, `brand_origin` = ? where brand_id = ?");
        $stmt->bind_param("ssi", $bName, $bOrigin, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBrands($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from brand where brand_id = ?");
        $stmt->bind_param("i", $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>

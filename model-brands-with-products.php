<?php
function selectBrands() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT brand_id, brand_name, brand_origin FROM `brand`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBrandsByProducts($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT product_id, product_name, product_category, product_gr, brand_id FROM product p WHERE brand_id = ?");
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

function selectBrandsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT brand_id, brand_name FROM `brand` order by brand_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectProductsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT product_id, product_name, FROM `product` order by product_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCatalog($nam, $cat, $gr, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `product` (`product_name`, `product_category`, `product_gr`, `brand_id`) VALUES (?,?,?,?)");
        $stmt->bind_param("sssi", $nam, $cat, $gr, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCatalog($nam, $cat, $gr, $bid, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `product` set `product_name` = ?, `product_category` = ?, `product_gr` = ?, `brand_id` = ? where `product_id` = ?");
        $stmt->bind_param("sssii", $nam, $cat, $gr, $bid, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCatalog($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from product where product_id = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>

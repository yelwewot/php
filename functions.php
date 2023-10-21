<?php
    function conn_db()
    {
        try {
            //if not working, change '3306' to your mysql port
            return new PDO('mysql:host=localhost:3307;dbname=pointofsale', 'root', '');
        } catch (PDOException $ex) {
            echo "Connection Error: ", $ex->getMessage();
        }
    }

    // Create
    function add_data($menu_name, $menu_desc)
    {
        $db = conn_db();
        $sql = "Insert into ref_menu(menu_name, menu_desc)values(?, ?)";
        $st = $db->prepare($sql);
        $st->execute(array($menu_name, $menu_desc));
        $db = null;
    }

    // Retrieve 
    function view_data()
    {
        $db = conn_db();
        $sql = "SELECT * FROM ref_menu ORDER BY id ASC";
        $st = $db->prepare($sql);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
        return $rows;
    }

    // Retrieve JSON format
    function view_data_json()
    {
        $db = conn_db();
        $sql = "SELECT * FROM ref_menu ORDER BY id ASC";
        $st = $db->prepare($sql);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
        $jsonRes = json_encode($rows);
        echo $jsonRes;
        $db = null;
        return $rows;
    }

    // Update 
    function update_data($menu_name, $menu_desc, $id)
    {
        $db = conn_db();
        $sql = "UPDATE ref_menu SET menu_name=?, menu_desc=?, price=? WHERE id=?";
        $st = $db->prepare($sql);
        $st->execute([$menu_name, $menu_desc, $id]);
        $db = null;
    }

    // Delete
    function delete_data($id)
    {
        $db = conn_db();
        $sql = "DELETE FROM ref_menu WHERE id=?";
        $st = $db->prepare($sql);
        $st->execute([$id]);
        $db = null;
    }

    // Search
    function search_data($id)
    {
        $db = conn_db();
        $sql = "SELECT * FROM ref_menu WHERE id=?";
        $st = $db->prepare($sql);
        $st->execute(array($id));
        $row = $st->fetch(PDO::FETCH_ASSOC);
        $db = null;
        return $row ?: [];
    }
?>
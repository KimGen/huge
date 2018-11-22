<?php

/**
 * RegionModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class RegionModel
{
    /**
     * Get all region (region are just example data that the user has created)
     * @return array an array with several objects (the results)
     */
    public static function getAllRegion()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, region_id, nacionalidad_nombre, region_text FROM region WHERE user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    /**
     * Get a single region
     * @param int $region_id id of the specific region
     * @return object a single object (the result)
     */
    public static function getRegion($region_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, region_id, region_text FROM region WHERE user_id = :user_id AND region_id = :region_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), ':region_id' => $region_id));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    /**
     * Set a region (create a new one)
     * @param string $region_text region text that will be created
     * @return bool feedback (was the region created properly ?)
     */
    public static function createRegion($nacionalidad_nombre, $region_text)
    {
        if (!$region_text || strlen($region_text) == 0) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO region (nacionalidad_nombre, region_text, user_id) VALUES (:nacionalidad_nombre, :region_text, :user_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':nacionalidad_nombre' => $nacionalidad_nombre, ':region_text' => $region_text, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    }

    /**
     * Update an existing region
     * @param int $region_id id of the specific region
     * @param string $region_text new text of the specific region
     * @return bool feedback (was the update successful ?)
     */
    public static function updateRegion($region_id, $region_text)
    {
        if (!$region_id || !$region_text) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE region SET region_text = :region_text WHERE region_id = :region_id AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':region_id' => $region_id, ':region_text' => $region_text, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_EDITING_FAILED'));
        return false;
    }

    /**
     * Delete a specific region
     * @param int $region_id id of the region
     * @return bool feedback (was the region deleted properly ?)
     */
    public static function deleteRegion($region_id)
    {
        if (!$region_id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM region WHERE region_id = :region_id AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':region_id' => $region_id, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_DELETION_FAILED'));
        return false;
    }
}
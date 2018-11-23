<?php

/**
 * NacionalidadModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class NacionalidadModel
{
    /**
     * Get all nacionalidad (nacionalidad are just example data that the user has created)
     * @return array an array with several objects (the results)
     */
    public static function getAllNacionalidad()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, nacionalidad_id, nacionalidad_nombre FROM nacionalidad WHERE user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    /**
     * Get a single nacionalidad
     * @param int $nacionalidad_id id of the specific nacionalidad
     * @return object a single object (the result)
     */
    public static function getNote($nacionalidad_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, nacionalidad_id, nacionalidad_text FROM nacionalidad WHERE user_id = :user_id AND nacionalidad_id = :nacionalidad_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), ':nacionalidad_id' => $nacionalidad_id));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    /**
     * Set a nacionalidad (create a new one)
     * @param string $nacionalidad_text nacionalidad text that will be created
     * @return bool feedback (was the nacionalidad created properly ?)
     */
    public static function createNacionalidad($nacionalidad_nombre)
    {
        if (!$nacionalidad_nombre || strlen($nacionalidad_nombre) == 0) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO nacionalidad (nacionalidad_nombre, user_id) VALUES (:nacionalidad_nombre, :user_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':nacionalidad_nombre' => $nacionalidad_nombre, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    }

    /**
     * Update an existing nacionalidad
     * @param int $nacionalidad_id id of the specific nacionalidad
     * @param string $nacionalidad_text new text of the specific nacionalidad
     * @return bool feedback (was the update successful ?)
     */
    public static function updateNote($nacionalidad_id, $nacionalidad_text)
    {
        if (!$nacionalidad_id || !$nacionalidad_text) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE nacionalidad SET nacionalidad_nombre = :nacionalidad_nombre WHERE nacionalidad_id = :nacionalidad_id AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':nacionalidad_id' => $nacionalidad_id, ':nacionalidad_nombre' => $nacionalidad_text, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_EDITING_FAILED'));
        return false;
    }

    /**
     * Delete a specific nacionalidad
     * @param int $nacionalidad_id id of the nacionalidad
     * @return bool feedback (was the nacionalidad deleted properly ?)
     */
    public static function deleteNacionalidad($nacionalidad_id)
    {
        if (!$nacionalidad_id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM nacionalidad WHERE nacionalidad_id = :nacionalidad_id AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':nacionalidad_id' => $nacionalidad_id, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_DELETION_FAILED'));
        return false;
    }
}

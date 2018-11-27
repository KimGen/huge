<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class FurModel
{
    /**
     * Get all notes (notes are just example data that the user has created)
     * @return array an array with several objects (the results)
     */
    public static function getAllNotes()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT user_id, note_id, note_text FROM notes WHERE user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    /**
     * Get a single note
     * @param int $note_id id of the specific note
     * @return object a single object (the result)
     */
    public static function getFur($paciente_rut)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT fur_id, paciente_rut, fur_fecha, fpp_fecha FROM fur WHERE user_id = :user_id AND paciente_rut = :paciente_rut LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), ':paciente_rut' => $paciente_rut));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    /**
     * Set a note (create a new one)
     * @param string $note_text note text that will be created
     * @return bool feedback (was the note created properly ?)
     */
    public static function createFur($paciente_rut, $fur_fecha)
    {
        if (!$paciente_rut || strlen($paciente_rut) == 0 || !$fur_fecha || strlen($fur_fecha) == 0 ) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();
  
        $fpp_fecha = date("Y/m/d", strtotime("$fur_fecha +40 week"));

        $sql = "INSERT INTO fur (paciente_rut, fur_fecha, fpp_fecha, user_id) VALUES (:paciente_rut, :fur_fecha, :fpp_fecha, :user_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':paciente_rut' => $paciente_rut, ':fpp_fecha' => $fpp_fecha,':fur_fecha' => $fur_fecha, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    }

    /**
     * Update an existing note
     * @param int $note_id id of the specific note
     * @param string $note_text new text of the specific note
     * @return bool feedback (was the update successful ?)
     */
    public static function updateFur($paciente_rut, $fur_fecha)
    {
        if (!$paciente_rut || !$fur_fecha) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $fpp_fecha = date("Y/m/d", strtotime("$fur_fecha +40 week"));

        $sql = "UPDATE fur SET fur_fecha = :fur_fecha, fpp_fecha = :fpp_fecha WHERE paciente_rut = :paciente_rut AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':paciente_rut' => $paciente_rut, ':fpp_fecha' => $fpp_fecha, ':fur_fecha' => $fur_fecha, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_EDITING_FAILED'));
        return false;
    }

    /**
     * Delete a specific note
     * @param int $note_id id of the note
     * @return bool feedback (was the note deleted properly ?)
     */
    public static function deleteNote($note_id)
    {
        if (!$note_id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM notes WHERE note_id = :note_id AND user_id = :user_id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':note_id' => $note_id, ':user_id' => Session::get('user_id')));

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_DELETION_FAILED'));
        return false;
    }
}

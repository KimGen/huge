<?php

/**
 * EcografiaModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class EcografiaModel
{
    /**
     * Get all ecografias (ecografias are just example data that the user has created)
     * @return array an array with several objects (the results)
     */
    public static function getAllEcografias($tabla)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        if ($tabla == 'primertrimestre'){
            $sql = "SELECT ecografia_id, ecografia_fecha, ecografia_eg, ecografia_lcn_mm, ecografia_lcn_eg, ecografia_saco_mm, ecografia_saco_eg, ecografia_utero_uno, ecografia_utero_dos, ecografia_cuerpo, ecografia_saco_txt, ecografia_saco_mm_copia, ecografia_vitelino_txt, ecografia_vitelino_mm, ecografia_embrion_txt, ecografia_lcn_mm_copia, ecografia_fcf, ecografia_anexo_derecho, ecografia_anexo_izquierdo, ecografia_douglas_txt, ecografia_douglas_com, ecografia_com FROM primertrimestre WHERE user_id = :user_id";
            $query = $database->prepare($sql);
            $query->execute(array(':user_id' => Session::get('user_id')));
        }

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    /**
     * Get a single ecografia
     * @param int $ecografia_id id of the specific ecografia
     * @return object a single object (the result)
     */
    public static function getEcografia($tabla,$ecografia_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        if ($tabla == 'primertrimestre'){
            $sql = "SELECT ecografia_id, ecografia_fecha, ecografia_eg, ecografia_lcn_mm, ecografia_lcn_eg, ecografia_saco_mm, ecografia_saco_eg, ecografia_utero_uno, ecografia_utero_dos, ecografia_cuerpo, ecografia_saco_txt, ecografia_saco_mm_copia, ecografia_vitelino_txt, ecografia_vitelino_mm, ecografia_embrion_txt, ecografia_lcn_mm_copia, ecografia_fcf, ecografia_anexo_derecho, ecografia_anexo_izquierdo, ecografia_douglas_txt, ecografia_douglas_com, ecografia_com FROM primertrimestre WHERE user_id = :user_id AND ecografia_id = :ecografia_id LIMIT 1";
            $query = $database->prepare($sql);
            $query->execute(array(':user_id' => Session::get('user_id'), ':ecografia_id' => $ecografia_id));
        }

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    /**
     * Set a ecografia (create a new one)
     * @param string $ecografia_text ecografia text that will be created
     * @return bool feedback (was the ecografia created properly ?)
     */
    public static function createEcografia($tabla,$data)
    {
        if (!$data) {
            Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        if ($tabla == 'primertrimestre'){
            $data = json_decode($data);

            $sql = "INSERT INTO ecografias (ecografia_fecha, ecografia_eg, ecografia_lcn_mm, ecografia_lcn_eg, ecografia_saco_mm, ecografia_saco_eg, ecografia_utero_uno, ecografia_utero_dos, ecografia_cuerpo, ecografia_saco_txt, ecografia_saco_mm_copia, ecografia_vitelino_txt, ecografia_vitelino_mm, ecografia_embrion_txt, ecografia_lcn_mm_copia, ecografia_fcf, ecografia_anexo_derecho, ecografia_anexo_izquierdo, ecografia_douglas_txt, ecografia_douglas_com, ecografia_com, user_id) VALUES (:ecografia_fecha, :ecografia_eg, :ecografia_lcn_mm, :ecografia_lcn_eg, :ecografia_saco_mm, :ecografia_saco_eg, :ecografia_utero_uno, :ecografia_utero_dos, :ecografia_cuerpo, :ecografia_saco_txt, :ecografia_saco_mm_copia, :ecografia_vitelino_txt, :ecografia_vitelino_mm, :ecografia_embrion_txt, :ecografia_lcn_mm_copia, :ecografia_fcf, :ecografia_anexo_derecho, :ecografia_anexo_izquierdo, :ecografia_douglas_txt, :ecografia_douglas_com, :ecografia_com, :user_id)";
            $query = $database->prepare($sql);
            $query->execute(array(':ecografia_fecha' => $data->ecografia_fecha, ':ecografia_eg' => $data->ecografia_eg, ':ecografia_lcn_mm' => $data->ecografia_lcn_mm, ':ecografia_lcn_eg' => $data->ecografia_lcn_eg, ':ecografia_saco_mm' => $data->ecografia_saco_mm, ':ecografia_saco_eg' => $data->ecografia_saco_eg, ':ecografia_utero_uno' => $data->ecografia_utero_uno, ':ecografia_utero_dos' => $data->ecografia_utero_dos, ':ecografia_cuerpo' => $data->ecografia_cuerpo, ':ecografia_saco_txt' => $data->ecografia_saco_txt, ':ecografia_saco_mm_copia' => $data->ecografia_saco_mm_copia, ':ecografia_vitelino_txt' => $data->ecografia_vitelino_txt, ':ecografia_vitelino_mm' => $data->ecografia_vitelino_mm, ':ecografia_embrion_txt' => $data->ecografia_embrion_txt, ':ecografia_lcn_mm_copia' => $data->ecografia_lcn_mm_copia, ':ecografia_fcf' => $data->ecografia_fcf, ':ecografia_anexo_derecho' => $data->ecografia_anexo_derecho, ':ecografia_anexo_izquierdo' => $data->ecografia_anexo_izquierdo, ':ecografia_douglas_txt' => $data->ecografia_douglas_txt, ':ecografia_douglas_com' => $data->ecografia_douglas_com, ':ecografia_com' => $data->ecografia_com, ':user_id' => Session::get('user_id')));
        }

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_CREATION_FAILED'));
        return false;
    }

    /**
     * Update an existing ecografia
     * @param int $ecografia_id id of the specific ecografia
     * @param string $ecografia_text new text of the specific ecografia
     * @return bool feedback (was the update successful ?)
     */
    public static function updateEcografia($tabla, $ecografia_id, $ecografia_text)
    {
        if (!$ecografia_id || !$ecografia_text) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        if ($tabla == 'primertrimestre'){
            $sql = "UPDATE ecografias SET ecografia_text = :ecografia_text WHERE ecografia_id = :ecografia_id AND user_id = :user_id LIMIT 1";
            $query = $database->prepare($sql);
            $query->execute(array(':ecografia_id' => $ecografia_id, ':ecografia_text' => $ecografia_text, ':user_id' => Session::get('user_id')));
        }

        if ($query->rowCount() == 1) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_EDITING_FAILED'));
        return false;
    }

    /**
     * Delete a specific ecografia
     * @param int $ecografia_id id of the ecografia
     * @return bool feedback (was the ecografia deleted properly ?)
     */
    public static function deleteEcografia($tabla,$ecografia_id)
    {
        if (!$ecografia_id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        if ($tabla == 'primertrimestre'){
            $sql = "DELETE FROM ecografias WHERE ecografia_id = :ecografia_id AND user_id = :user_id LIMIT 1";
            $query = $database->prepare($sql);
            $query->execute(array(':ecografia_id' => $ecografia_id, ':user_id' => Session::get('user_id')));
        }

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_DELETION_FAILED'));
        return false;
    }
}

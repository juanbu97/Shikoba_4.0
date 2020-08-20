ALTER TABLE `diario_aula_convivencia`
    ADD `trabajo`
        ENUM('A','B','C','')
        NULL DEFAULT NULL AFTER `actitud`;
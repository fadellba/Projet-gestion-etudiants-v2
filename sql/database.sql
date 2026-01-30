CREATE TYPE statut_etudiant AS ENUM ('Actif', 'Inactif', 'Diplome');

CREATE TABLE
    etudiants (
        id SERIAL PRIMARY KEY,
        nom VARCHAR(50) NOT NULL,
        prenom VARCHAR(100) NOT NULL,
        email VARCHAR(50) UNIQUE NOT NULL,
        telephone VARCHAR(15),
        date_naissance DATE,
        filiere VARCHAR(50),
        niveau VARCHAR(50),
        date_inscription DATE DEFAULT CURRENT_DATE,
        statut statut_etudiant DEFAULT 'Actif'
    );
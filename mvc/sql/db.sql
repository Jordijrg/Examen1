

CREATE TABLE Alumne (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Cognoms VARCHAR(255),
    DataNaixement DATE,
    AdrecaCarrer VARCHAR(255),
    AdrecaNumero INT,
    AdrecaCiutat VARCHAR(255),
    AdrecaCodiPostal VARCHAR(10),
    ResguardPagament BLOB -- Puedes almacenar un PDF o una imagen como un objeto binario en la base de datos
);

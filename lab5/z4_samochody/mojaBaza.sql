CREATE DATABASE mojaBaza;

CREATE TABLE samochody (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marka VARCHAR(255) NOT NULL,
    model VARCHAR(255) NOT NULL,
    cena DECIMAL(10, 2) NOT NULL,
    rok INT NOT NULL,
    opis TEXT 
);

INSERT INTO samochody (marka, model, cena, rok, opis) VALUES
('Toyota', 'Corolla', 75000.00, 2020, 'Popularny samochód kompaktowy, idealny do miasta.'),
('Honda', 'Civic', 80000.00, 2019, 'Solidny i niezawodny, znany z oszczędności paliwa.'),
('Ford', 'Mustang', 150000.00, 2021, 'Klasyczny amerykański muscle car z potężnym silnikiem.'),
('BMW', '3 Series', 200000.00, 2018, 'Luksusowy sedan z zaawansowanymi technologiami.'),
('Audi', 'A4', 190000.00, 2020, 'Elegancki wygląd i nowoczesne wnętrze.'),
('Mercedes-Benz', 'C-Class', 210000.00, 2021, 'Komfortowy i elegancki, z najwyższą jakością wykonania.'),
('Volkswagen', 'Golf', 85000.00, 2019, 'Kompaktowy hatchback, wszechstronny i praktyczny.'),
('Hyundai', 'Elantra', 70000.00, 2020, 'Nowoczesny design i niezawodność w przystępnej cenie.'),
('Mazda', 'CX-5', 130000.00, 2021, 'Kompaktowy SUV z dynamicznym wyglądem i świetnym prowadzeniem.'),
('Subaru', 'Outback', 140000.00, 2020, 'Wszechstronny i trwały, idealny na różne warunki terenowe.');
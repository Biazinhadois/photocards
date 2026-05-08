SELECT current_user;
SELECT database();
show databases;
use db_teste;


CREATE TABLE IF NOT EXISTS photocards (
    id INT PRIMARY KEY AUTO_INCREMENT,		-- ID único (gerado automaticamente)
    membro VARCHAR(50) NOT NULL,                    -- Nome do membro (RM, Jin, Suga, J-Hope, Jimin, V, Jungkook)
    era VARCHAR(100) NOT NULL,                      -- Era ou Álbum (ex: Wings, BE, Map of the Soul: 7)
    versao VARCHAR(50) NOT NULL,                    -- Versão do card (ex: Ver. 1, No More Dream, Holográfico)
    raridade VARCHAR(50) NOT NULL,                  -- Nível de raridade (Comum, Raro, Ultra Raro)
    oficial VARCHAR(50) NOT NULL,          -- É oficial? (original/fanmade)
    preco_pago DECIMAL(10, 2) NOT NULL,             -- Valor pago (ex: 85.50)
    foto VARCHAR(255) NOT NULL                -- Link para a foto do card (para ver no banco)
);

INSERT INTO photocards (membro, era, versao, raridade, oficial, preco_pago, foto) VALUES 
('Jeon Jungkook', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/jk-lyt-o.jpg'),
('Jeon Jungkook', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/jk-lyher-v.jpg'),
('Kim Taehyung', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/tae-lyt-o.jpg'),
('Kim Taehyung', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/tae-lyher-e.jpg'),
('Park Jimin', "Love Yourself 結 'Answer'", 'Normal', 'Comum', 'Original', 100.00, './IMAGENS/jimin-lya-f.jpg'),
('Park Jimin', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/jimin-lyt-r.jpg'),
('Park Jimin', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/jimin-lyher-v.jpg'),
('Park Jimin', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/jimin-lyher-o.jpg'),
('Jung Hoseok', "Love Yourself 承 'Her'", 'Normal', 'Raro', 'Original', 150.00, './IMAGENS/hoseok-lyher-vinyl.jpg'),
('Min Yoongi', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Fanmade', 10.00, './IMAGENS/suga_lyher_fanmade_paper.jpg'),
('Min Yoongi', "Love Yourself 承 'Her'", 'Normal', 'Raro', 'Original', 150.00, './IMAGENS/suga-lyher-vinyl.jpg'),
('Min Yoongi', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/suga-lyher-v.jpg'),
('Min Yoongi', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 85.50, './IMAGENS/suga_lyher_L.png'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 85.50, './IMAGENS/rm-lyher-l.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/rm-lyher-o.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/rm-lyher-v.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/rm-lyher-e.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Normal', 'Raro', 'Original', 150.00, './IMAGENS/rm-lyher-vinyl.jpg'),
('Kim Namjoon', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/rm-lyt-y.jpg'),
('Kim Namjoon', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/rm-lyt-o.jpg'),
('Kim Namjoon', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/rm-lyt-u.jpg'),
('Kim Namjoon', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/rm-lyt-r.jpg'),
('Kim Namjoon', "Love Yourself 轉 'Tear'", 'Holográfico', 'Raro', 'Original', 160.00, './IMAGENS/rm-lyt-vinyl.jpg'),
('Kim Namjoon', "Love Yourself 結 'Answer'", 'Normal', 'Comum', 'Original', 100.00, './IMAGENS/rm-lya-s.jpg'),
('Kim Namjoon', "Love Yourself 結 'Answer'", 'Normal', 'Comum', 'Original', 100.00, './IMAGENS/rm-lya-e.jpg'),
('Kim Namjoon', "Love Yourself 結 'Answer'", 'Normal', 'Comum', 'Original', 100.00, './IMAGENS/rm-lya-l.jpg'),
('Kim Namjoon', "Love Yourself 結 'Answer'", 'Normal', 'Comum', 'Original', 100.00, './IMAGENS/rm-lya-f.jpg'),
('Kim Namjoon', 'Love Yourself Seoul', 'Normal', 'Raro', 'Original', 180.00, './IMAGENS/rm-ly-seoul-dvd.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Holográfico', 'Comum', 'Fanmade', 15.00, './IMAGENS/rm_lyher_fanmade_holo1.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Transparent Card', 'Comum', 'Fanmade', 20.00, './IMAGENS/rm_lyher_fanmade_transparent.jpg'),
('Kim Namjoon', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Fanmade', 10.00, './IMAGENS/rm_lyher_fanmade_paper.jpg'),
('Kim Seokjin', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 85.50, './IMAGENS/jin_lyher_L.png'),
('Kim Seokjin', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/jin-lyher-o.jpg'),
('Kim Seokjin', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/jin-lyher-v.jpg'),
('Kim Seokjin', "Love Yourself 承 'Her'", 'Normal', 'Comum', 'Original', 90.00, './IMAGENS/jin-lyher-e.jpg'),
('Kim Seokjin', "Love Yourself 承 'Her'", 'Normal', 'Raro', 'Original', 150.00, './IMAGENS/jin-lyher-vinyl.jpg'),
('Kim Seokjin', "Love Yourself 轉 'Tear'", 'Normal', 'Comum', 'Original', 95.00, './IMAGENS/jin-lyt-y.jpg');

desc photocards;

select * from photocards;

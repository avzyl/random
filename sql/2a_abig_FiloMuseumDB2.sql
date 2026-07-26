use 2a_abig_filomuseumdb;
CREATE VIEW ArtworksByGenreView AS
SELECT
    a.artwork_id,
    a.artwork_title,
    a.year_created,
    ar.artist_name,
    g.genre_name
FROM
    artworks a
JOIN
    artists ar ON a.artist_id = ar.artist_id
JOIN
    artwork_genres ag ON a.artwork_id = ag.artwork_id
JOIN
    art_genres g ON ag.genre_id = g.genre_id
WHERE
    g.genre_name = 'Impressionism';

# Przyśpieszony kurs HTML

HTML (HyperText Markup Language) jest językiem znacznikowym, za jego pomocą definiujemy strukturę, semantykę stron internetowych. Mówiąc inaczej pozwala nam nadać treściom dodatkowy kontekst, metadane pomocne przy ich przetwarzaniu. Prosty przykład będzie pomocny. Oceń, bądź scharakteryzuj poniższy tekst:

```
Trzcina cukrowa w przemyśle.

Trzcina cukrowa (Saccharum officinarum), z którego wytwarzana jest większość cukru (ok. 65% światowej produkcji). Najwięksi producenci trzciny cukrowej to m.in. Brazylia, Indie, Chiny, Tajlandia i Pakistan.

W 2013 r. Instytut Ekonomiki Rolnictwa i Gospodarki Żywnościowej wydał pracę pt. "Sytuacja na światowym rynku cukru i jej wpływ na możliwości uprawy buraków cukrowych w Polsce". Na wstępie rozdziału drugiego znajduje się następująca informacja:

Początki uprawy trzciny cukrowej z przeznaczeniem do otrzymywania
cukru datowane są na okres ok. 8 tys. lat p.n.e., kiedy to mieszkańcy Nowej
Gwinei, prawdopodobnie jako pierwsi odkryli właściwości tej rośliny.
```

Możemy się domyśleć, że powyższy tekst jest pewnego rodzaju artykułem (stworzonym na potrzeby tego kursu). Generalnie gdybyśmy chcieli podzielić to opracowanie na nagłówek, streszczenie, cytat z innej publikacji, to prawdopodobnie musielibyśmy zrobić to ręcznie, tzn. napisanie skryptu, który robił by to automatycznie byłoby trudne bez żadnej struktury. Zobaczmy jak wygląda dokument o tej samej treści wraz ze znacznikami języka HTML:

```html
<article>
    <h2>Trzcina cukrowa w przemyśle.</h2>

    Trzcina cukrowa (Saccharum officinarum), z którego wytwarzana jest większość cukru (ok. 65% światowej produkcji). Najwięksi producenci trzciny cukrowej to m.in. Brazylia, Indie, Chiny, Tajlandia i Pakistan.

    W 2013 r. Instytut Ekonomiki Rolnictwa i Gospodarki Żywnościowej wydał pracę pt. "Sytuacja na światowym rynku cukru i jej wpływ na możliwości uprawy buraków cukrowych w Polsce". Na wstępie rozdziału drugiego znajduje się następująca informacja:

    Początki uprawy trzciny cukrowej z przeznaczeniem do otrzymywania
    cukru datowane są na okres ok. 8 tys. lat p.n.e., kiedy to mieszkańcy Nowej
    Gwinei, prawdopodobnie jako pierwsi odkryli właściwości tej rośliny.
</article>
```

//TODO aria-labelledby, inline tags (from reference)
